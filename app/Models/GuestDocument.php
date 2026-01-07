<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestDocument extends Model
{
    protected $fillable = [
        'guest_id',
        'type',
        'number',
        'issued_at',
        'expires_at',
        'country'
    ];

    protected $casts = [
        'issued_at' => 'date',
        'expires_at' => 'date',
    ];
}
