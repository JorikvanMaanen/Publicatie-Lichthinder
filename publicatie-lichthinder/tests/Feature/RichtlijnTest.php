<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RichtlijnTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_users_can_open_the_guideline_layout(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get('/vieuw/richtlijn')
            ->assertOk()
            ->assertViewIs('richtlijn');
    }

    public function test_homepage_image_links_to_the_guideline_page(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get(route('home'))
            ->assertOk()
            ->assertSee(asset('images/Lichthinder webpagina.png'), false)
            ->assertSee(route('richtlijn'), false);
    }
}
