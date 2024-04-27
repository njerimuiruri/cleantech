<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\County; 
use App\Models\Subcounty;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcounty>
 */
class SubcountyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        {
            $county = County::inRandomOrder()->first();
    
            return [
                'subcounty_name' => $this->faker->unique()->city,
                'county_id' => $county->county_id,
            ];
        }
    }
}
