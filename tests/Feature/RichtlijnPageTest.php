<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RichtlijnPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_approved_users_can_view_the_pdf_page_navigation(): void
    {
        $user = User::factory()->create(['is_approved' => true]);

        $this->actingAs($user)
            ->get(route('richtlijn'))
            ->assertOk()
            ->assertSee('data-pdf-viewer', false)
            ->assertSee('pdf/richtlijn.pdf', false)
            ->assertSee('PDF-pagina’s', false);
    }
}
