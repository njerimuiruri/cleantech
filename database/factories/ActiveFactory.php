<?php

namespace Database\Factories;

use App\Models\Active;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActiveFactory extends Factory
{
    protected $model = Active::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id,
        ];
    }
}
