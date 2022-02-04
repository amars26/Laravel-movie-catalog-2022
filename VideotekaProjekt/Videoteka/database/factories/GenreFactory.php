<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\genre;

class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = genre::class;

    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
        ];
    }
}
