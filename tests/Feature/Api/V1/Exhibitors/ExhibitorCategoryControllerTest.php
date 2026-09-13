<?php

namespace Tests\Feature\Api\V1\Exhibitors;

use App\Models\ExhibitorCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExhibitorCategoryControllerTest extends TestCase
{

    use RefreshDatabase;

    public function test_can_create_exhibitor_category(): void
    {        
        $exhibitorCategory = ExhibitorCategory::factory()->create();

        $response = $this->getJson('/api/v1/exhibitor-categories');

        $response->assertSuccessful()
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment([
                'id' => $exhibitorCategory->id,
            ]);
    }
}