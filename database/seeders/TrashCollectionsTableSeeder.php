<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrashCollection;

class TrashCollectionsTableSeeder extends Seeder
{
    public function run()
    {
        TrashCollection::factory()->count(50)->create();
    }
}
