<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\movie;
class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        movie::factory()->count(5)->create();
    }
}
