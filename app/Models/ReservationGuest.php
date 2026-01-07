<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationGuest extends Model
{
    protected $fillable = [
        'reservation_id',
        'guest_id',
        'role'
    ]; // occupant,payer
}
