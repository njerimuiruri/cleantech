<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserPoints;

class UserPointsTableSeeder extends Seeder
{
    public function run()
    {
        UserPoints::factory()->count(50)->create();
    }
}
