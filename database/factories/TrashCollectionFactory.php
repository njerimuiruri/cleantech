<?php

namespace Database\Factories;

use App\Models\TrashCollection;
use App\Models\User;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrashCollectionFactory extends Factory
{
    protected $model = TrashCollection::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->user_id,
            'location_id' => Location::inRandomOrder()->first()->location_id,
            'collection_date_time' => $this->faker->dateTimeThisMonth(),
            'is_special_request' => $this->faker->boolean,
            'status' => $this->faker->randomElement(['Pending', 'Completed']),
            'trash_bag_count' => $this->faker->numberBetween(1, 10),
            'additional_bags_requested' => $this->faker->optional()->numberBetween(1, 5),
            'notes' => $this->faker->optional()->text,
            'collection_day' => $this->faker->optional()->dayOfWeek,
        ];
    }
}
