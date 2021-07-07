<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ParkingSpaceType::factory(2)->create();
        \App\Models\Booking::factory(200)->create();
        // \App\Models\ParkingSpaceType::factory(2)->create();
    }
}
