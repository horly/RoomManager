<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationRoom extends Model
{
    protected $fillable = [
        'reservation_id',
        'room_id',
        'rate',
        'rate_plan_code',
        'assigned_at'
    ];

    protected $casts = ['assigned_at' => 'datetime'];
}
