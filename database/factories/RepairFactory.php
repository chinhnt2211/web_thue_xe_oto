<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repair>
 */
class RepairFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'admin_id' => $this->faker->randomElement(\App\Models\Station::where('role', '<>', '0')->get()->pluck('id')),
            'vehicle_id' => $this->faker->randomElement(\App\Models\Vehicle::get()->pluck('id')),
            'fee' => $this->faker->,
            'start_date' => $this->faker->,
            'end_date' => $this->faker->,
            'description' => $this->faker->,
            'status' => $this->faker->,
        ];
    }
}
