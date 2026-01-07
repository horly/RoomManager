<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'hotel_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'vip_level',
        'preferences',
        'notes',
    ];

    protected $casts = [
        'preferences' => 'array',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function documents()
    {
        return $this->hasMany(GuestDocument::class);
    }
}
