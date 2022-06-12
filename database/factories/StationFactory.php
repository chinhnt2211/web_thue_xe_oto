<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->unique()->randomElement(Location::query()->where('type', '=',0)->get('id')),
            'phone_number' => $this->faker->regexify('0[0-9]{9}'),
            'capacity' => $this->faker->numberBetween(1000,1500)
        ];
    }
}
