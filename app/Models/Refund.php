<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $fillable = ['payment_id','amount','refunded_at','reason','processed_by_user_id','meta'];

    protected $casts = ['refunded_at' => 'datetime','meta' => 'array'];
}
