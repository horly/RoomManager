<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FolioItem extends Model
{
    protected $fillable = [
        'folio_id',
        'type',
        'category',
        'label',
        'service_date',
        'qty',
        'unit_price',
        'total',
        'is_taxable',
        'meta',
        'created_by_user_id'
    ];

    protected $casts = [
        'service_date' => 'date',
        'is_taxable' => 'boolean',
        'meta' => 'array',
    ];
}
