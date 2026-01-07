<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RatePlan extends Model
{
    protected $fillable = [
        'hotel_id',
        'code',
        'name',
        'is_refundable',
        'rules'
    ];

    protected $casts = ['is_refundable' => 'boolean','rules' => 'array'];
}
