<?php

namespace Database\Factories;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * This is the factory class for the Plant model.
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define the default state of the Plant model
        return [
            'scientific_name' => $this->faker->word,
            'common_name' => $this->faker->word,
            'family' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'care' => $this->faker->paragraph,
            'height' => $this->faker->word,
            'plant_image' => $this->faker->imageUrl,
            'supplier' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
