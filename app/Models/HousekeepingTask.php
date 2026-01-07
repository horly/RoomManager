<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HousekeepingTask extends Model
{
    protected $fillable = ['room_id','task_date','status','notes','assigned_to_user_id','completed_at'];

    protected $casts = [
        'task_date' => 'date',
        'completed_at' => 'datetime',
    ];
}
