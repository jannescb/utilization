<?php

namespace App\Http\Controllers;

use App\Models\BookingLine;

class UtilizationController
{
    public function __invoke()
    {
        return BookingLine::indoor()->get()->pluck('booked_days')->flatten()->sort()->countBy();
    }
}
