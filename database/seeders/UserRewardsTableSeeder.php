<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRewards;

class UserRewardsTableSeeder extends Seeder
{
    public function run()
    {
        UserRewards::factory()->count(20)->create();
    }
}
