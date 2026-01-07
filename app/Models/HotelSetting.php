<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelSetting extends Model
{
    protected $fillable = [
        'hotel_id',
        'currency',
        'tax_rate',
        'check_in_time',
        'check_out_time',
        'policies'
    ];

    protected $casts = [
        'policies' => 'array'
    ];
}
