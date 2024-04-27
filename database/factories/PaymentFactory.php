<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User; // Add this line
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id, // Get random user ID from users table
            'package_id' => $this->faker->numberBetween(1, 10), // Assuming package IDs are from 1 to 10
            'payment_amount' => $this->faker->randomFloat(2, 10, 500),
            'payment_date_time' => $this->faker->dateTimeThisYear(),
            'payment_method' => $this->faker->randomElement(['Credit Card', 'PayPal', 'Bank Transfer']),
            'payment_status' => $this->faker->randomElement(['Success', 'Pending', 'Failed']),
        ];
    }
}
