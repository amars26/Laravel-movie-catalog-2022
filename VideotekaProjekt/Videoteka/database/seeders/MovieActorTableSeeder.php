<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovieActor;
class MovieActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MovieActor::factory()->count(5)->create();
    }
}
