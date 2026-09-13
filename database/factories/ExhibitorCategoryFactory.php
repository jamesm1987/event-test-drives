<?php

namespace Database\Factories;

use App\Models\ExhibitorCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Event>
 */
class ExhibitorCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->randomElement([
            'Wheelchair Accessible Vehicles', 
            'Adaptations', 
            'Scooters and powered wheelchairs', 
            'Scheme partners', 
            'Disability Organisations', 
            'Other exhibitors'
        ]);

        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
        ];
    }

}
