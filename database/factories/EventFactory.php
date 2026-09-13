<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city = fake('en_GB')->city();
        $base_date = Carbon::instance(fake()->dateTimeBetween('now', '+12 months'));
        $start_at = $base_date->next(5)->setTime(9, 0, 0); 
        $end_at = (clone $start_at)->addDays(2)->setTime(16, 0, 0); 

        return [
            'name'        => $city,
            'slug'        => Str::slug($city),
            'location'    => fake('en_GB')->company() . ' ' . fake('en_GB')->randomElement(['Centre', 'Hall', 'Arena']),
            'latitude'    => fake('en_GB')->latitude(50.0, 59.0),
            'longitude'   => fake('en_GB')->longitude(-6.0, 2.0),
            'archived_at' => null,
            'map_image'   => null,
            'start_at'    => $start_at,
            'end_at'      => $end_at, 
        ];
    }

    /**
     * Indicate that the model should be archived
     */
    public function archived_at(): static
    {
        return $this->state(fn (array $attributes) => [
            'archived_at' => Carbon::now(),
        ]);
    }
}
