<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'code',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'timezone',
    ];

    public function settings()
    {
        return $this->hasOne(HotelSetting::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function roomTypes()
    {
        return $this->hasMany(RoomType::class);
    }
}
