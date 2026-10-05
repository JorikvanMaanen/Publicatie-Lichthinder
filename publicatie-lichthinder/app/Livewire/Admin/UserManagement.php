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

    public function mount(): void
    {
        $this->authorize('manage-users');
    }

    public function updateRole(int $userId): void
    {
        $this->authorize('manage-users');

        $validated = $this->validate([
            "roles.{$userId}" => ['required', Rule::in([User::ROLE_ADMIN, User::ROLE_USER])],
        ]);

        $role = $validated['roles'][$userId];

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
    }

    public function render()
    {
        $users = User::query()
            ->select(['id', 'name', 'email', 'role', 'created_at'])
            ->orderBy('name')
            ->paginate(20);

        foreach ($users as $user) {
            $this->roles[$user->id] ??= $user->role;
        }

        return view('livewire.admin.user-management', [
            'users' => $users,
        ]);
    }
}
