<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' =>$this->faker->numberBetween(0,1),
            'city_id' =>$this->faker->regexify('(0[1-9]|[1-8][0-9]|9[0-6])'),
            'district_id' =>$this->faker->regexify('(0[0-9][1-9]|[1-8][0-9][0-9]|9[1-6][0-9]|97[0-3])'),
            'subdistrict_id' =>$this->faker->regexify('(0[0-9][0-9][0-9][1-9]|[1-2][0-9][0-9][0-9][0-9]|3[0-1][0-9][0-9][0-9]|32[0-1][0-9][0-9]|322[0-3][0-9]|3224[0-8])')
        ];
    }
}
