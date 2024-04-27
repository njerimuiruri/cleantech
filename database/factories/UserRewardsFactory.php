<?php

namespace Database\Factories;

use App\Models\UserRewards;
use App\Models\User;
use App\Models\Reward;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserRewardsFactory extends Factory
{
    protected $model = UserRewards::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id,
            'reward_id' => Reward::inRandomOrder()->first()->reward_id,
            'redeemed_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
