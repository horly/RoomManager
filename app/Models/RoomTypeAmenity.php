<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomTypeAmenity extends Model
{
    protected $table = 'room_type_amenities';
    protected $fillable = ['room_type_id','amenity_id'];
}
