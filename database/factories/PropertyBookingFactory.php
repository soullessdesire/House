<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Property;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory <\App\Models\PropertyBooking>
 */
class PropertyBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'property_id' => Property::factory(),
            'booking_date' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'start_date' => $startDate = fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'end_date' => fake()->dateTimeBetween($startDate, '+1 month')->format('Y-m-d'),
            'total_cost' => fake()->randomFloat(2, 50, 1000),
        ];
    }
}
