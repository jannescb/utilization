<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $from = $this->faker->dateTimeBetween('now', '+2 years');
        $to = $this->faker->dateTimeBetween(Carbon::parse($from)->addDays(3), Carbon::parse($from)->addDays(21));
        return [
            'arrival_at' =>$from,
            'departure_at' =>$to,
        ];
    }
}
