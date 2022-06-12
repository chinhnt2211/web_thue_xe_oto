<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->unique()->randomElement(Location::query()->where('type', '=',0)->get('id')),
            'phone_number' => $this->faker->regexify('0[0-9]{9}'),
            'hashed_password' => $this->faker->password(),
            'cic_number' => $this->faker->regexify('0[0-9]{11}')
        ];
    }
}
