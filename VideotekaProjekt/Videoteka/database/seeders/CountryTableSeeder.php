<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\country;
class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        country::factory()->count(5)->create();
    }
}
