<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
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
        return [
            'scientific_name' => fake()->word,
            'common_name' => fake()->word,
            'family' => fake()->word,
            'description' => fake()->paragraph,
            'care' => fake()->paragraph,
            'height' => fake()->word,
            'plant_image' => fake()->imageUrl,
            'supplier' => fake()->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
