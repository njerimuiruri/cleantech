<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
        $this->call([
            UsersTableSeeder::class,
            CountiesTableSeeder::class,
            SubcountiesTableSeeder::class,
            WardsTableSeeder::class,
            LocationsTableSeeder::class,
            PackagesTableSeeder::class,
            PaymentsTableSeeder::class,
            RewardsTableSeeder::class,
            SmsRemindersTableSeeder::class,
            ActivesTableSeeder::class,
            UserPointsTableSeeder::class,
            UserRewardsTableSeeder::class,
            TrashCollectionsTableSeeder::class,
        ]);
    }
}
