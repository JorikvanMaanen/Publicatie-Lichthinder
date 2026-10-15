<?php

namespace Tests\Feature\Admin;

use App\Livewire\Admin\UserManagement;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Livewire\Livewire;
use Tests\TestCase;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_default_to_the_user_role(): void
    {
        $user = User::factory()->create();

        $this->assertSame(User::ROLE_USER, $user->fresh()->role);
        $this->assertFalse($user->isAdmin());
        $this->assertFalse(Schema::hasColumn('users', 'is_approved'));
    }

    public function test_regular_users_cannot_open_user_management(): void
    {
        $user = User::factory()->create();
        $user->forceFill(['approval_status' => User::APPROVAL_APPROVED])->save();

        $this->actingAs($user);

        $this->get(route('admin.users'))
            ->assertForbidden();

        $this->get(route('home'))
            ->assertOk()
            ->assertDontSee(__('Gebruikersbeheer'));
    }

    public function test_admin_can_view_users_and_change_their_roles(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN, 'approval_status' => User::APPROVAL_APPROVED])->save();
        $user = User::factory()->create();

        $this->actingAs($admin);

        $this->get(route('admin.users'))
            ->assertOk()
            ->assertSee(__('Gebruikersbeheer'))
            ->assertSee($user->email);

        $component = Livewire::test(UserManagement::class)
            ->call('requestRoleChange', $user->id, User::ROLE_ADMIN)
            ->assertSee(__('Rolwijziging bevestigen'))
            ->assertSee(__('Een beheerdersrol geeft toegang tot gebruikersbeheer en gevoelige instellingen.'));

        $this->assertFalse($user->fresh()->isAdmin());

        $component->call('confirmRoleChange')
            ->assertHasNoErrors();

        $this->assertTrue($user->fresh()->isAdmin());
    }

    public function test_admin_can_cancel_a_role_change(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN, 'approval_status' => User::APPROVAL_APPROVED])->save();
        $user = User::factory()->create();

        $this->actingAs($admin);

        Livewire::test(UserManagement::class)
            ->call('requestRoleChange', $user->id, User::ROLE_ADMIN)
            ->call('cancelRoleChange')
            ->assertSet("roles.{$user->id}", User::ROLE_USER)
            ->assertSet('pendingRoleUserId', null)
            ->assertSet('pendingRole', null)
            ->assertHasNoErrors();

        $this->assertFalse($user->fresh()->isAdmin());
    }

    public function test_admin_can_approve_and_unapprove_users_after_confirmation(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN, 'approval_status' => User::APPROVAL_APPROVED])->save();
        $user = User::factory()->create();

        $this->actingAs($admin);

        $component = Livewire::test(UserManagement::class)
            ->assertSee(__('In afwachting'))
            ->call('requestApprovalChange', $user->id, User::APPROVAL_APPROVED)
            ->assertSee(__('Goedkeuring wijzigen'))
            ->assertSet('pendingApprovalUserId', $user->id)
            ->assertSet('pendingApproval', User::APPROVAL_APPROVED);

        $this->assertSame(User::APPROVAL_PENDING, $user->fresh()->approval_status);

        $component->call('confirmApprovalChange')
            ->assertHasNoErrors()
            ->assertSee(__('Goedgekeurd'));

        $this->assertSame(User::APPROVAL_APPROVED, $user->fresh()->approval_status);

        $component->call('requestApprovalChange', $user->id, User::APPROVAL_PENDING)
            ->assertSet('pendingApproval', User::APPROVAL_PENDING)
            ->call('confirmApprovalChange')
            ->assertHasNoErrors()
            ->assertSee(__('In afwachting'));

        $this->assertSame(User::APPROVAL_PENDING, $user->fresh()->approval_status);
    }

    public function test_admin_can_cancel_an_approval_change(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN, 'approval_status' => User::APPROVAL_APPROVED])->save();
        $user = User::factory()->create();

        $this->actingAs($admin);

        Livewire::test(UserManagement::class)
            ->call('requestApprovalChange', $user->id, User::APPROVAL_APPROVED)
            ->call('cancelApprovalChange')
            ->assertSet("approvals.{$user->id}", User::APPROVAL_PENDING)
            ->assertSet('pendingApprovalUserId', null)
            ->assertSet('pendingApproval', null)
            ->assertHasNoErrors();

        $this->assertSame(User::APPROVAL_PENDING, $user->fresh()->approval_status);
    }

    public function test_admin_can_reject_a_user_after_confirmation(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill([
            'role' => User::ROLE_ADMIN,
            'approval_status' => User::APPROVAL_APPROVED,
        ])->save();
        $user = User::factory()->create();

        $this->actingAs($admin);

        Livewire::test(UserManagement::class)
            ->call('requestApprovalChange', $user->id, User::APPROVAL_REJECTED)
            ->assertSee(__('Afgekeurd'))
            ->call('confirmApprovalChange')
            ->assertHasNoErrors()
            ->assertSet("approvals.{$user->id}", User::APPROVAL_REJECTED);

        $this->assertSame(User::APPROVAL_REJECTED, $user->fresh()->approval_status);
        $this->assertSame(User::APPROVAL_REJECTED, $user->fresh()->approval_status);
    }

    public function test_admin_cannot_revoke_their_own_approval(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN, 'approval_status' => User::APPROVAL_APPROVED])->save();

        $this->actingAs($admin);

        Livewire::test(UserManagement::class)
            ->call('requestApprovalChange', $admin->id, User::APPROVAL_PENDING)
            ->call('confirmApprovalChange')
            ->assertHasErrors(["approval.{$admin->id}"]);

        $this->assertSame(User::APPROVAL_APPROVED, $admin->fresh()->approval_status);
    }

    public function test_admin_cannot_demote_themselves_or_the_last_admin(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN, 'approval_status' => User::APPROVAL_APPROVED])->save();

        $this->actingAs($admin);

        Livewire::test(UserManagement::class)
            ->call('requestRoleChange', $admin->id, User::ROLE_USER)
            ->call('confirmRoleChange')
            ->assertHasErrors(["roles.{$admin->id}"]);

        $this->assertTrue($admin->fresh()->isAdmin());
    }

    public function test_console_command_promotes_an_existing_user_to_admin(): void
    {
        $user = User::factory()->create();

        $this->artisan('users:make-admin', ['email' => $user->email])
            ->assertSuccessful();

        $this->assertTrue($user->fresh()->isAdmin());
    }

    public function test_console_command_reports_an_unknown_user(): void
    {
        $this->artisan('users:make-admin', ['email' => 'unknown@example.test'])
            ->assertFailed();
    }
}
