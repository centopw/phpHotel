<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;

class roomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sourceDir = public_path('source_images/');
        $newFileName = 'rooms_' . uniqid() . '.jpg';

        // Ensure the directory exists
        if (!File::exists($sourceDir)) {
            File::makeDirectory($sourceDir, 0755, true);
        }
        $imageUrl = 'https://loremflickr.com/800/400/building';
        $imageContent = file_get_contents($imageUrl);
        file_put_contents($sourceDir . $newFileName, $imageContent);
        return [
            // 'hotel_id' => $hotel->id,
            'room_type_id' => '1',
            'roomnumber' => $this->faker->unique()->numberBetween(1, 100),
            'capacity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(100, 999),
            'roomImage' => $newFileName,
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
