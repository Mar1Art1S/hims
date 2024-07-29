<?php

namespace Database\Factories;

use App\Enums\CategoryEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'category' => fake()->randomElement(CategoryEnum::cases()),
            'options' => [
                [
                    'name' => fake()->words(3, true),
                    'parameter' => fake()->word(),
                ],
                [
                    'name' => fake()->words(3, true),
                    'parameter' => fake()->word(),
                ],
            ],
        ];
    }
}
