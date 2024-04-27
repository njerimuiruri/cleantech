<?php

namespace Database\Factories;

use App\Models\Reward;
use Illuminate\Database\Eloquent\Factories\Factory;

class RewardFactory extends Factory
{
    protected $model = Reward::class;

    public function definition()
    {
        return [
            'reward_name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'points_required' => $this->faker->numberBetween(10, 1000),
            'is_active' => $this->faker->boolean(80), // 80% chance of being active
        ];
    }
}
