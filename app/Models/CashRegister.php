<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashRegister extends Model
{
    protected $fillable = ['hotel_id','name','code','is_active'];

    protected $casts = ['is_active' => 'boolean'];
}
