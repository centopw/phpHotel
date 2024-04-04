<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoomBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => \App\Models\User::factory(),
            // 'hotel_id' => \App\Models\hotels::factory(),
            // 'room_id' => \App\Models\rooms::factory(),
            'name' => $this->faker->name,
            'total_members' => $this->faker->numberBetween(1, 5),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'arrival_date' => $arrivalDate = $this->faker->dateTimeBetween('2024-04-04', '2024-04-30'),
            'depature_date' => $this->faker->dateTimeInInterval($arrivalDate, '+5 days'),
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['1', '0']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
