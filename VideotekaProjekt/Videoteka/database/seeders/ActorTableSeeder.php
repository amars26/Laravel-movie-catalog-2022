<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\actor;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        actor::factory()->count(5)->create();
    }
}
