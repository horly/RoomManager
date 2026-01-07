<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RatePlanPrice extends Model
{
    protected $fillable = [
        'rate_plan_id',
        'room_type_id',
        'date',
        'price'
    ];

    protected $casts = ['date' => 'date'];
}
