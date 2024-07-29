<?php

namespace Database\Factories;

use App\Enums\CategoryEnum;
use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fio' => fake()->name(),
            'contact' => fake()->phoneNumber(),
            'city' => fake()->city(),
            'description' => fake()->paragraph(5),
            'product' => fake()->randomElement(CategoryEnum::all()),
            'status' => fake()->randomElement(OrderStatus::cases()),
        ];
    }
}
