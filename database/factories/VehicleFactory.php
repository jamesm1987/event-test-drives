<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\FakeCar;
use Illuminate\Support\Str;

/**
 * @extends Factory<Event>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

    $this->faker->addProvider(new FakeCar($this->faker));

        $vehicle = $this->fake->vehicleArray();

        $fuel_types = ['petrol', 'diesel', 'electric', 'hybrid', 'phev'];

        return [
            'name'        => $name,
            'manufacturer_id' => Manufacturer::factory(),
        ];
    }

}
