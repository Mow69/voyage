<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'status' => 'Upcoming Event',
            'destination' => $this->faker->city . ' - ' . $this->faker->country,
            'description' => $this->faker->text,
            'date' => $this->faker->date,
            'cost' => $this->faker->numberBetween(200, 1200),
            'organizer' => $this->faker->name,
            'rating' => $this->faker->numberBetween(1, 5),
            'picture' => "https://source.unsplash.com/random/1600x900/?vacations,beach,island",
            'topPlace' => $this->faker->numberBetween(1, 999),
        ];
    }
}
