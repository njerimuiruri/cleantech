<?php

namespace Database\Factories;

use App\Models\Ward;
use App\Models\Subcounty;
use Illuminate\Database\Eloquent\Factories\Factory;

class WardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ward::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subcounty = Subcounty::inRandomOrder()->first();

        return [
            'ward_name' => $this->faker->unique()->city,
            'subcounty_id' => $subcounty->subcounty_id,
        ];
    }
}
