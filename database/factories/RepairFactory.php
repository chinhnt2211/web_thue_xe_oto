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
        $start_date = $this->faker->date($format = 'Y-m-d', $max = 'now');

        return [
            'admin_id' => $this->faker->randomElement(\App\Models\Admin::where('role', '<>', '0')->pluck('id')),
            'vehicle_id' => $this->faker->randomElement(\App\Models\Vehicle::get()->pluck('id')),
            'fee' => $this->faker->randomDigit(2)*1000*1000,
            'start_date' => $start_date,
            'end_date' => date('y-m-d', strtotime($start_date . ' +1 day')),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement([0, 1, 2, 3]),
        ];
    }
}
