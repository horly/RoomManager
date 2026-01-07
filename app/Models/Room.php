<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'hotel_id',
        'room_type_id',
        'floor_id',
        'room_number',
        'status',
        'phone_extension',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'array',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function type()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
}
