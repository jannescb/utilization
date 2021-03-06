<?php

namespace Database\Factories;

use App\Models\ParkingSpaceType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParkingSpaceTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParkingSpaceType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->streetName(),
            'capacity' => $this->faker->numberBetween(100, 200),
        ];
    }
}
