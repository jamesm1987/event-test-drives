<?php

namespace Tests\Feature\Api\V1\Exhibitors;

use App\Models\Exhibitor;
use App\Models\ExhibitorCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExhibitorControllerTest extends TestCase
{

    use RefreshDatabase;

    public function test_exhibitor_can_be_assigned_to_a_category(): void
    {        
        $exhibitorCategory = ExhibitorCategory::factory()
            ->create();

        $exhibitor = Exhibitor::factory()->create([
            'exhibitor_category_id' => $exhibitorCategory->id
        ]);

        $response = $this->getJson('/api/v1/exhibitor-categories?exhibitors=true');

        $response->assertSuccessful()
            ->assertJsonCount(1, 'data');

        
    }
}