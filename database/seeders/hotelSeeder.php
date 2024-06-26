<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\hotels;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hotels::factory()->count(10)->create();
    }
}
