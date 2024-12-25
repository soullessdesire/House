<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory <\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'owner_id' => User::factory(),
            'long_description' => fake()->description(),
            'price' => fake()->randomFloat(2, 2500, 25000),
            'location' => LocationFactory::factory(),
            'bedrooms' => fake()->randomInteger(),
            'date_listed' => fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'status' => fake()->randomElement(['']),
        ];
    }
}
