<?php

namespace Database\Factories;

use App\Models\SmsReminder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmsReminderFactory extends Factory
{
    protected $model = SmsReminder::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id, // Get random user ID from users table
            'reminder_type' => $this->faker->randomElement(['Appointment', 'Payment', 'Event']),
            'reminder_date_time' => $this->faker->dateTimeThisMonth(),
            'status' => $this->faker->randomElement(['Pending', 'Sent']),
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
