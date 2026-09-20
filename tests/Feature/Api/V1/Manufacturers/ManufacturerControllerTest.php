<?php

namespace Tests\Feature\Api\V1\Manufacturers;

use App\Models\Manufacturer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ManufacturerControllerTest extends TestCase
{

    use RefreshDatabase;

    public function test_can_list_manufacturers(): void
    {        
        $manufacturer = Manufacturer::factory()->create();

        $response = $this->getJson('/api/v1/manufacturers');

        $response->assertSuccessful()
            ->assertJsonCount(1, 'data');
    }

    public function test_can_get_a_single_manufacturer(): void
    {        
        $manufacturer = Manufacturer::factory()->create();

        $response = $this->getJson("/api/v1/manufacturers/{$manufacturer->slug}");

        $response->assertSuccessful()
            ->assertJsonFragment([
                'id'   => $manufacturer->id,
                'name' => $manufacturer->name,
            ]);
    }    
}