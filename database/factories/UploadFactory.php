<?php

namespace Database\Factories;

use App\Models\Upload;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * This is the factory class for the Upload model.
 */
class UploadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define the default state of the Upload model
        return [
            'location' => $this->faker->word,
            // 'user_id'=>fake()->word,
            // 'plant_id'=>fake()->word,
            'upload_image' => $this->faker->imageUrl,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
