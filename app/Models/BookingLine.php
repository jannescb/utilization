<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'parking_space_type_id',
        'persons_count'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
