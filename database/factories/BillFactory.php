<?php

namespace Database\Factories;

use App\Models\Contract;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $contract = \App\Models\Contract::inRandomOrder()->first();

        $datetime1 = new DateTime($contract->start_date);
        $datetime2 = new DateTime($contract->end_date);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        return [
            'contract_id' => $contract->id,
            'type' => 1,
            'total' => $contract->price*$days,
            'description' => $this->faker->sentence(),
        ];
    }
}
