<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Illness>
 */
class IllnessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Flu', 'Cancer', 'Corona', 'Sugary']),
            'img' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
