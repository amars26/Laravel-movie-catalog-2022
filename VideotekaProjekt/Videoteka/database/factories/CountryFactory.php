<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\country;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = country::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
        ];
    }
}
