<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\User;
use App\Models\Subcounty;
use App\Models\Ward;
use App\Models\County;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $subcounty = Subcounty::inRandomOrder()->first();
        $ward = Ward::inRandomOrder()->first();
        $county = County::inRandomOrder()->first();

        return [
            'user_id' => $user->user_id,
            'subcounty_id' => $subcounty->subcounty_id,
            'ward_id' => $ward->ward_id,
            'estate' => $this->faker->streetName,
            'building_name' => $this->faker->optional()->buildingNumber,
            'house_number' => $this->faker->optional()->buildingNumber,
            'county_id' => $county->county_id,
        ];
    }
}
