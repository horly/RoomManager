<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashMovement extends Model
{
    protected $fillable = [
        'cash_register_id','type','amount','currency','reason','reference',
        'moved_at','performed_by_user_id','meta'
    ];

    protected $casts = ['moved_at' => 'datetime','meta' => 'array'];
}
