<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\hotels;
use App\Models\rooms;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hotels::all()->each(function ($hotel) {
            rooms::factory()->count(30)->create([
                'hotel_id' => $hotel->id,
            ]);
        });
    }
}
