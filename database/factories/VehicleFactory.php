<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        
        $price = ($this->faker->randomNumber(2)+1)*1000*1000;

        return [
            'name' => $this->faker->vehicle,
            'status' => $this->faker->randomElement([0, 1, 2, 3]),
            'description' => $this->faker->sentence(),
            'license_number' => $this->faker->vehicleRegistration,
            'price' => $price,
            'rent_price' => $price/10,
            'fine' => $price/10*1.5,
            'station_id' => $this->faker->randomElement(\App\Models\Station::get()->pluck('id')),
            'brand_id' => $this->faker->randomElement(\App\Models\Brand::get()->pluck('id')),
            'seating_capacity_id' => $this->faker->randomElement(\App\Models\SeatingCapacity::get()->pluck('id')),
        ];
    }
}