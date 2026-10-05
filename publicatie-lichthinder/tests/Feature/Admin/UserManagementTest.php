<?php

namespace Tests\Feature\Admin;

use App\Livewire\Admin\UserManagement;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
    }

    public function test_regular_users_cannot_open_user_management(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get(route('admin.users'))
            ->assertForbidden();

        $this->get(route('home'))
            ->assertOk()
            ->assertDontSee(__('Gebruikersbeheer'));
    }

    public function test_admin_can_view_users_and_change_their_roles(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN])->save();
        $user = User::factory()->create();

        $this->actingAs($admin);

        $this->get(route('admin.users'))
            ->assertOk()
            ->assertSee(__('Gebruikersbeheer'))
            ->assertSee($user->email);

        Livewire::test(UserManagement::class)
            ->set("roles.{$user->id}", User::ROLE_ADMIN)
            ->call('updateRole', $user->id)
            ->assertHasNoErrors();

        $this->assertTrue($user->fresh()->isAdmin());
    }

    public function test_admin_cannot_demote_themselves_or_the_last_admin(): void
    {
        $admin = User::factory()->create();
        $admin->forceFill(['role' => User::ROLE_ADMIN])->save();

        $this->actingAs($admin);

        Livewire::test(UserManagement::class)
            ->set("roles.{$admin->id}", User::ROLE_USER)
            ->call('updateRole', $admin->id)
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
