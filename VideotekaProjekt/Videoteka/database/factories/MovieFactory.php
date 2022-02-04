<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\movie;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = movie::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'idcountry' => $this->faker->numberBetween(5,19),
            'idpicture' =>1,
            'releasedate' => now(),
            'iddirector' => $this->faker->numberBetween(5,10),
            'idgenre' => $this->faker->numberBetween(10,20),
        ];
    }
}
