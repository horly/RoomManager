<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'hotel_id',
        'code',
        'name',
        'is_active',
        'config'
    ];

    protected $casts = ['is_active' => 'boolean','config' => 'array'];
}
