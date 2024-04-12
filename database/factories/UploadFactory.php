<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Upload>
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
        return [
            'filename' => fake()->word,
            'user_id'=>fake()->word,
            'plant_id'=>fake()->word,
            'upload_image'=>fake()->imageUrl,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
