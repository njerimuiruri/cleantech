<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Active;

class ActivesTableSeeder extends Seeder
{
    public function run()
    {
        Active::factory()->count(50)->create();
    }
}
