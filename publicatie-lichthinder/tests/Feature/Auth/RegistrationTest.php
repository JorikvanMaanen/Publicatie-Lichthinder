<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->skipUnlessFortifyHas(Features::registration());
    }

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get(route('register'));

        $response->assertOk();
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post(route('register.store'), [
            'first_name' => 'John',
            'tussenvoegsel' => 'van',
            'last_name' => 'Doe',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertSessionHasNoErrors()
            ->assertRedirect(route('auth.account-created', absolute: false));

        $this->assertGuest();
        $user = User::where('email', 'test@example.com')->firstOrFail();

        $this->assertSame('John', $user->first_name);
        $this->assertSame('van', $user->tussenvoegsel);
        $this->assertSame('Doe', $user->last_name);
        $this->assertSame('John van Doe', $user->name);
        $this->assertSame(User::APPROVAL_PENDING, $user->approval_status);

        $this->get(route('auth.account-created'))
            ->assertOk();
    }

    public function test_registration_does_not_require_a_prefix(): void
    {
        $this->post(route('register.store'), [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])->assertSessionHasNoErrors();

        $user = User::where('email', 'jane@example.com')->firstOrFail();

        $this->assertNull($user->tussenvoegsel);
        $this->assertSame('Jane Doe', $user->name);
    }
}
