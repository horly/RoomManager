<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Folio extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'hotel_id',
        'reservation_id',
        'number',
        'status',
        'currency',
        'subtotal',
        'tax_total',
        'discount_total',
        'grand_total',
        'paid_total',
        'balance_due',
        'closed_at',
        'closed_by_user_id'
    ];

    protected $casts = ['closed_at' => 'datetime'];

    public function items()
    {
        return $this->hasMany(FolioItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
