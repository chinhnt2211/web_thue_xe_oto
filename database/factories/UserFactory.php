<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'location_id' => $this->faker->unique()->randomElement(Location::query()->where('type', '=', 0)->get('id')),
            'phone' => $this->faker->regexify('0[0-9]{9}'),
            'password' => $this->faker->password(),
            'cic_number' => $this->faker->regexify('0[0-9]{11}'),
            'cic_front' => $this->faker->unique()->randomElement(Image::query()->where('type', '=', 1)->get('id')),
            'cic_back' => $this->faker->unique()->randomElement(Image::query()->where('type', '=', 2)->get('id')),
            'dob' => $this->faker->dateTimeBetween('-50 years', '-20 years')->format('Y-m-d'),
            'gender' => $this->faker->numberBetween(0,1),
            'avatar' => $this->faker->unique()->randomElement(Image::query()->where('type', '=', 0)->get('id')),
            'status' => $this->faker->numberBetween(0,2),
        ];
    }
}
