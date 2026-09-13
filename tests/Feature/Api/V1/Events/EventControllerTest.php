<?php

namespace Tests\Feature\Api\V1\Events;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventControllerTest extends TestCase
{

    use RefreshDatabase;

    public function test_can_list_events(): void
    {        
        $event = Event::factory()->create([
            'name' => 'Birmingham',
            'slug' => 'birmingham',
            'archived_at' => null,
        ]);
    
        $response = $this->getJson('/api/v1/events');

        $response->assertSuccessful()
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment([
                'id' => $event->id,
                'name' => 'Birmingham',
                'slug' => 'birmingham',
            ]);
    }

    public function test_can_be_archived(): void
    {
        $event = Event::factory()->create([
            'archived_at' => null,
        ]);

        $event->archive();

        expect($event->fresh()->archived_at)->not->toBeNull();
    }

    public function test_can_list_only_active_events(): void
    {
        $activeEvent = Event::factory()->create([
            'archived_at' => null,
        ]);

        $archivedEvent = Event::factory()->create([
            'archived_at' => now()
        ]);

        $response = $this->getJson('/api/v1/events');

        $response->assertSuccessful()
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment([
                'id'   => $activeEvent->id,
                'slug' => $activeEvent->slug,
            ])
            ->assertJsonMissing([
                'id'   => $archivedEvent->id,
            ]);
    }

    // public function test_can_apply_with_archived(): void
    // {
    //     $activeEvent = Event::factory()->create([
    //         'archived_at' => null,
    //     ]);

    //     $archivedEvent = Event::factory()->create([
    //         'archived_at' => now()
    //     ]);

    //     $response = $this->getJson('/api/v1/events');

    //     $response->assertSuccessful()
    //         ->assertJsonCount(2, 'data');
    // }    

}