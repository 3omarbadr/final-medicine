<?php

namespace Database\Factories;

use App\Models\Illness;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicineService>
 */
class MedicineServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'img' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'illness_id' => Illness::pluck('id')->random(),
        ];
    }
}
