<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory <\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'county' => fake()->state(),
            'subcounty' => fake()->city(),
            'constituency' => fake()->word(),
            'ward' => fake()->word(),
            'location' => fake()->streetName(),
            'sublocation' => fake()->word(),
            'village' => fake()->citySuffix(),
        ];
    }
}
