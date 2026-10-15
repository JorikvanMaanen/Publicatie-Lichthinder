<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Gebruikersbeheer')]
class UserManagement extends Component
{
    use WithPagination;

    /**
     * @var array<int, string>
     */
    public array $roles = [];

    /**
     * @var array<int, string>
     */
    public array $approvals = [];

    public ?int $pendingRoleUserId = null;

    public ?string $pendingRole = null;

    public ?int $pendingApprovalUserId = null;

    public ?string $pendingApproval = null;

    public function mount(): void
    {
        $this->authorize('manage-users');
    }

    public function requestRoleChange(int $userId, string $role): void
    {
        $this->authorize('manage-users');

        $user = User::query()->findOrFail($userId);

        $this->roles[$userId] = $role;

        $validated = $this->validate([
            "roles.{$userId}" => ['required', Rule::in([User::ROLE_ADMIN, User::ROLE_USER])],
        ]);
        $role = $validated['roles'][$userId];

        $this->resetValidation("roles.{$userId}");

        if ($role === $user->role) {
            return;
        }

        $this->pendingRoleUserId = $userId;
        $this->pendingRole = $role;
        $this->modal('confirm-role-change')->show();
    }

    public function confirmRoleChange(): void
    {
        $this->authorize('manage-users');

        $validated = $this->validate([
            'pendingRoleUserId' => ['required', 'integer', Rule::exists('users', 'id')],
            'pendingRole' => ['required', Rule::in([User::ROLE_ADMIN, User::ROLE_USER])],
        ]);

        $userId = (int) $validated['pendingRoleUserId'];
        $role = $validated['pendingRole'];
        $this->roles[$userId] = $role;

        if (! $this->saveRole($userId, $role)) {
            return;
        }

        $this->pendingRoleUserId = null;
        $this->pendingRole = null;
        $this->modal('confirm-role-change')->close();
    }

    public function cancelRoleChange(): void
    {
        $this->authorize('manage-users');

        if ($this->pendingRoleUserId !== null) {
            $user = User::query()->find($this->pendingRoleUserId);

            if ($user) {
                $this->roles[$user->id] = $user->role;
            } else {
                unset($this->roles[$this->pendingRoleUserId]);
            }

            $this->resetValidation("roles.{$this->pendingRoleUserId}");
        }

        $this->pendingRoleUserId = null;
        $this->pendingRole = null;
    }

    private function saveRole(int $userId, string $role): bool
    {
        $updated = DB::transaction(function () use ($userId, $role): bool {
            $user = User::query()->lockForUpdate()->findOrFail($userId);

            if ($user->isAdmin() && $role === User::ROLE_USER) {
                $admins = User::query()
                    ->where('role', User::ROLE_ADMIN)
                    ->lockForUpdate()
                    ->get(['id']);

                if ($user->is((auth()->user())) || $admins->count() <= 1) {
                    $this->addError("roles.{$userId}", __('Je kunt jezelf niet degraderen en de laatste beheerder niet verwijderen.'));

                    return false;
                }
            }

            $user->forceFill(['role' => $role])->save();

            return true;
        });

        if ($updated) {
            $this->dispatch('role-updated');
        }

        return $updated;
    }

    public function requestApprovalChange(int $userId, string $approval): void
    {
        $this->authorize('manage-users');

        $user = User::query()->findOrFail($userId);

        $this->approvals[$userId] = $approval;

        $validated = $this->validate([
            "approvals.{$userId}" => ['required', Rule::in([
                User::APPROVAL_APPROVED,
                User::APPROVAL_PENDING,
                User::APPROVAL_REJECTED,
            ])],
        ]);
        $approval = $validated['approvals'][$userId];

        $this->resetValidation("approval.{$userId}");

        if ($approval === $user->approval_status) {
            return;
        }

        $this->pendingApprovalUserId = $userId;
        $this->pendingApproval = $approval;
        $this->modal('confirm-approval-change')->show();
    }

    public function confirmApprovalChange(): void
    {
        $this->authorize('manage-users');

        $validated = $this->validate([
            'pendingApprovalUserId' => ['required', 'integer', Rule::exists('users', 'id')],
            'pendingApproval' => ['required', Rule::in([
                User::APPROVAL_APPROVED,
                User::APPROVAL_PENDING,
                User::APPROVAL_REJECTED,
            ])],
        ]);

        $userId = (int) $validated['pendingApprovalUserId'];
        $approval = $validated['pendingApproval'];
        $this->approvals[$userId] = $approval;

        if (! $this->saveApproval($userId, $approval)) {
            return;
        }

        $this->pendingApprovalUserId = null;
        $this->pendingApproval = null;
        $this->modal('confirm-approval-change')->close();
    }

    public function cancelApprovalChange(): void
    {
        $this->authorize('manage-users');

        if ($this->pendingApprovalUserId !== null) {
            $user = User::query()->find($this->pendingApprovalUserId);

            if ($user) {
                $this->approvals[$user->id] = $user->approval_status;
            } else {
                unset($this->approvals[$this->pendingApprovalUserId]);
            }

            $this->resetValidation("approval.{$this->pendingApprovalUserId}");
        }

        $this->pendingApprovalUserId = null;
        $this->pendingApproval = null;
    }

    private function saveApproval(int $userId, string $approval): bool
    {
        $updated = DB::transaction(function () use ($userId, $approval): bool {
            $user = User::query()->lockForUpdate()->findOrFail($userId);

            if ($user->is(auth()->user())
                && $user->approval_status === User::APPROVAL_APPROVED
                && $approval !== User::APPROVAL_APPROVED) {
                $this->addError("approval.{$userId}", __('Je kunt je eigen goedkeuring niet intrekken.'));

                return false;
            }

            $user->forceFill(['approval_status' => $approval])->save();

            return true;
        });

        if ($updated) {
            $this->dispatch('approval-updated');
        }

        return $updated;
    }

    public function render()
    {
        $users = User::query()
            ->select(['id', 'name', 'email', 'role', 'approval_status', 'created_at'])
            ->orderBy('name')
            ->paginate(20);

        foreach ($users as $user) {
            $this->roles[$user->id] ??= $user->role;
            $this->approvals[$user->id] ??= $user->approval_status;
        }

        return view('livewire.admin.user-management', [
            'users' => $users,
            'pendingRoleUser' => $this->pendingRoleUserId === null
                ? null
                : User::query()->find($this->pendingRoleUserId),
            'pendingApprovalUser' => $this->pendingApprovalUserId === null
                ? null
                : User::query()->find($this->pendingApprovalUserId),
        ]);
    }

}
