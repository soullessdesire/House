<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Location;
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
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 2500, 25000),
            'location_id' => Location::factory(),
            'bedrooms' => fake()->randomElement([0, .5, 1, 2, 3, 4, 5, 6]),
            'status' => fake()->randomElement(['Unlisted', 'Available', 'Rented']),
        ];
    }
}
