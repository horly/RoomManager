<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'folio_id','payment_method_id','amount','currency','paid_at',
        'status','reference','meta','received_by_user_id'
    ];

    protected $casts = [
        'paid_at' => 'datetime',
        'meta' => 'array',
    ];
}
