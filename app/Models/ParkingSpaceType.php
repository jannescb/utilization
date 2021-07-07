<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSpaceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'capacity'
    ];
}
