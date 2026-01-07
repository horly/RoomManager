<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceTicket extends Model
{
    protected $fillable = [
        'room_id','title','description','priority','status',
        'created_by_user_id','assigned_to_user_id','resolved_at'
    ];

    protected $casts = ['resolved_at' => 'datetime'];
}
