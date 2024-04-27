<?php

namespace Database\Factories;

use App\Models\UserPoints;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserPointsFactory extends Factory
{
    protected $model = UserPoints::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id,
            'points_earned' => $this->faker->numberBetween(0, 1000),
            'points_redeemed' => $this->faker->numberBetween(0, 500),
        ];
    }
}
