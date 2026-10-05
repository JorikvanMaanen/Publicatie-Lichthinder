<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get(route('login'));

        $response
            ->assertOk()
            ->assertDontSee('passkey')
            ->assertSee(asset('images/NSVVLOGO.png'), false)
            ->assertSee('Inloggen')
            ->assertSee('<html lang="nl"', false);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('home', absolute: false));

        $this->assertAuthenticated();
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrorsIn('email');

        $this->assertGuest();
    }

    public function test_two_factor_challenge_route_is_not_registered(): void
    {
        $this->assertFalse(Route::has('two-factor.login'));
    }

    public function test_users_with_legacy_two_factor_data_can_sign_in_with_their_password(): void
    {
        $user = User::factory()->create();
        $user->forceFill([
            'two_factor_secret' => encrypt('legacy-secret'),
            'two_factor_recovery_codes' => encrypt(json_encode(['legacy-code'])),
            'two_factor_confirmed_at' => now(),
        ])->save();

        $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect(route('home', absolute: false));

        $this->assertAuthenticatedAs($user);
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('logout'));

        $response->assertRedirect(route('home'));

        $this->assertGuest();
    }
}
