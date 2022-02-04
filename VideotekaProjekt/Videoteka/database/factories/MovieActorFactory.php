<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MovieActor;
class MovieActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = MovieActor::class;
    public function definition()
    {
        return [
            //
            'idmovie' => $this->faker->numberBetween(20,24),
            'idactor' => $this->faker->numberBetween(18,22),
            'role' => $this->faker->name(),
        ];
    }
}
