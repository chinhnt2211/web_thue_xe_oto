<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    
    {
        $user_id = $this->faker->randomElement(\App\Models\User::get()->pluck('id'));
        $admin_id = $this->faker->randomElement(\App\Models\Admin::where('role', '<>', '0')->pluck('id'));
        $vehicle_id = $this->faker->randomElement(\App\Models\Vehicle::get()->pluck('id'));
        $contract_image = $this->faker->randomElement(\App\Models\Image::where('type', '=', 1)->get()->pluck('id'));
        $start_date = $this->faker->date($format = 'Y-m-d', $max = 'now');
        $end_date = date('y-m-d', strtotime($start_date . ' +' . $this->faker->randomDigit(2) .' day'));

        return [
            'user_id' => $user_id,
            'admin_id' => $admin_id,
            'vehicle_id' => $vehicle_id,
            'status' => $this->faker->randomElement([0, 1, 2, 3]),
            'contract_image' => $contract_image,
            'price' => \App\Models\Vehicle::where('id', '=', $vehicle_id)->first()->price,
            'deposit_percent' => $this->faker->randomElement([3, 10, 30]),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
    }
}
