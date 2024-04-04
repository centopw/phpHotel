<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\hotels;
use App\Models\rooms;

class RoomBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming each hotel has rooms already seeded.
        rooms::all()->each(function ($room) {
            $bookingsCount = rand(2, 10); // Randomly choose between 2 to 6 bookings for each room

            for ($i = 0; $i < $bookingsCount; $i++) {
                \App\Models\RoomBooking::factory()->create([
                    'hotel_id' => $room->hotel_id,
                    'room_id' => $room->id,
                    'user_id' => \App\Models\User::inRandomOrder()->first()->id, // Random user for each booking
                ]);
            }
        });
    }
}
