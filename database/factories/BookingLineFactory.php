<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\BookingLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookingLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_id' => $this->faker->numberBetween(1, Booking::max('id')),
            'parking_space_type_id' => $this->faker->numberBetween(1, 2),
            'persons_count' => $this->faker->numberBetween(1, 5),
        ];
    }
}
