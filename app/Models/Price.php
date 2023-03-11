<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'apartment_id', 'from_date', 'to_date', 'price',
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}

