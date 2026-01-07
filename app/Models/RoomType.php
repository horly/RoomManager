<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'hotel_id',
        'name',
        'capacity_adults',
        'capacity_children',
        'base_price',
        'description',
        'features'
    ];

    protected $casts = ['features' => 'array'];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'room_type_amenities')->withTimestamps();
    }
}
