<?php

namespace Database\Factories;

use App\Models\Ninja;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'skill' => fake()->realText(500),
            'strength' => fake()->numberBetween(1, 100),
            'bio' => fake()->realText(500),
        ];
    }
}
