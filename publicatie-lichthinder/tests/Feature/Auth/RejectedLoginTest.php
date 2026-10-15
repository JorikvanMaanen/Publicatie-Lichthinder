<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RejectedLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_rejected_user_is_told_their_account_was_rejected_when_logging_in(): void
    {
        $user = User::factory()->create();
        $user->forceFill(['approval_status' => User::APPROVAL_REJECTED])->save();
        $message = __('Je account is afgekeurd. Neem contact op met een beheerder als je vragen hebt.');

        $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'password',
        ])
            ->assertRedirect(route('login'))
            ->assertSessionHasErrors(['email' => $message]);

        $this->get(route('login'))->assertSee($message);

        $this->assertGuest();
    }

    public function test_rejected_authenticated_user_is_told_their_account_was_rejected(): void
    {
        $user = User::factory()->create();
        $user->forceFill(['approval_status' => User::APPROVAL_REJECTED])->save();

        $this->actingAs($user)
            ->get(route('home'))
            ->assertRedirect(route('auth.account-created'))
            ->assertSessionHas('account_status', User::APPROVAL_REJECTED);

        $this->get(route('auth.account-created'))
            ->assertOk()
            ->assertSee(__('Je account is afgekeurd en je hebt geen toegang tot de applicatie.'));
    }

    public function test_approved_status_allows_login(): void
    {
        $user = User::factory()->create();
        $user->forceFill(['approval_status' => User::APPROVAL_APPROVED])->save();

        $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect(route('home'));

        $this->assertAuthenticatedAs($user);
    }
}
