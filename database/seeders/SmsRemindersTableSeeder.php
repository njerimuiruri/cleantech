<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmsReminder;

class SmsRemindersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmsReminder::factory()->count(20)->create();
    }
}
