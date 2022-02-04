<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\director;

class DirectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        director::factory()->count(5)->create();
    }
}
