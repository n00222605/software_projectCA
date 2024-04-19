<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * This is the factory class for the Supplier model.
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define the default state of the Supplier model
        return [
            'name' => $this->faker->word,
            'address' => $this->faker->sentence(5),
            'email' => $this->faker->email,
        ];
    }
}
