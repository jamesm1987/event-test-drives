<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\FakeCar;
use Illuminate\Support\Str;

/**
 * @extends Factory<Event>
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

    $this->faker->addProvider(new FakeCar($this->faker));

        $name = $this->faker->unique()->vehicleBrand();

        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
        ];
    }

}
