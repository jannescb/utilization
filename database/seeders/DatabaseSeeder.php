<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use App\Models\ParkingSpaceType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ParkingSpaceType::factory(2)->create();
        Booking::factory()
            ->times(200)
            ->hasBookingLines(2)
            ->create();
    }
}
