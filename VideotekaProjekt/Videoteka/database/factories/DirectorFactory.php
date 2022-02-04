<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\director;

class DirectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = director::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'lastname' => $this->faker->name(),
            'idcountry' => $this->faker->numberBetween(5,19),
            'idpicture' => 1,
            'birthdate' => now(),
        ];
    }
}
