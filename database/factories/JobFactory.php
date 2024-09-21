<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Decimal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => 50000,
            'currency' => fake()->currencyCode(),
            'description' => fake()->text()
        ];
    }


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function without_salary(): static
    {
        return $this->state(fn (array $attributes) => [
            'salary' => null,
        ]);
    }
}
