<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RichtlijnTest extends TestCase
{
    use RefreshDatabase;

    public function test_approved_users_see_the_scrollable_pdf_with_their_name_as_watermark(): void
    {
        $user = User::factory()->create(['name' => 'Test Reader']);
        $user->forceFill(['is_approved' => true])->save();

        $response = $this->actingAs($user)->get(route('richtlijn'));

        $response->assertOk()
            ->assertSee('data-pdf-viewer', false)
            ->assertSee('data-pdf-url="'.route('richtlijn.document').'"', false)
            ->assertSee('data-watermark="'.$user->name.'"', false)
            ->assertDontSee('<iframe', false);

        $this->get(route('richtlijn.document'))
            ->assertOk()
            ->assertHeader('content-type', 'application/pdf')
            ->assertHeader('cache-control', 'no-store, private');
    }

    public function test_guests_cannot_access_the_guideline_pdf(): void
    {
        $this->get(route('richtlijn.document'))
            ->assertRedirect(route('login'));

        $this->get('/pdf/richtlijn.pdf')
            ->assertNotFound();
    }
}
