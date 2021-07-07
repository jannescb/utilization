<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// get utilization
// BookingLine::all()->pluck('booked_days')->flatten()->sort()->countBy()
class BookingLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'parking_space_type_id',
        'persons_count'
    ];

    protected $with = ['booking'];
    protected $appends = ['booked_days'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function scopeIndoor()
    {
        return $this->where('parking_space_type_id', 1);
    }

    public function getBookedDaysAttribute()
    {
        $dates = CarbonPeriod::create($this->booking->arrival_at, Carbon::parse($this->booking->departure_at)->subDay())->toArray();
        
        $array = [];
        foreach ($dates as $date) {
            $array []= $date->timestamp;
        }

        return $array;
    }
}
