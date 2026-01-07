<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'hotel_id',
        'guest_id',
        'code',
        'status',
        'check_in_date',
        'check_out_date',
        'adults',
        'children',
        'source',
        'special_requests',
    ];

    protected $dates = [
        'check_in_date',
        'check_out_date',
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'reservation_rooms')
                    ->withPivot(['rate', 'rate_plan', 'assigned_at'])
                    ->withTimestamps();
    }

    public function folio()
    {
        return $this->hasOne(Folio::class);
    }
}
