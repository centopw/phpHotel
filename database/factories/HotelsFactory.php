<?php

namespace Database\Factories;

use App\Models\hotels; // Use your actual model class
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class HotelsFactory extends Factory
{
    protected $model = hotels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sourceDir = public_path('source_images/');
        $newFileName = 'building_' . uniqid() . '.jpg';

        // Ensure the directory exists
        if (!File::exists($sourceDir)) {
            File::makeDirectory($sourceDir, 0755, true);
        }

        // Fetch and save the image from the external URL
        $imageUrl = 'https://loremflickr.com/800/400/building';
        $imageContent = file_get_contents($imageUrl);
        file_put_contents($sourceDir . $newFileName, $imageContent);

        return [
            'name' => $this->faker->name(),
            'fb' => 'https://tanhiep.dev',
            'twitter' => 'https://tanhiep.dev',
            'insta' => 'https://tanhiep.dev',
            'sliderDesc' => $this->faker->paragraph(1),
            'sliderImage' => json_encode(["" . $newFileName]),
            'heading' => 'A beautiful resort',
            'aboutDescription' => $this->faker->paragraph(1),
            'aboutImage1' => $newFileName,
            'aboutImage2' => $newFileName,
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
