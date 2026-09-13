<?php

namespace Database\Factories;

use App\Models\{ExhibitorCategory, Exhibitor};
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Event>
 */
class ExhibitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake('en_GB')->company();
        return [
            'name'                  => $name,
            'slug'                  => Str::slug($name),
            'exhibitor_category_id' => ExhibitorCategory::factory(),
        ];
    }

}
