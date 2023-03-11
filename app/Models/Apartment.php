<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'number_of_rooms', 'balcony', 'number_of_beds', 'apartment_size', 'air_conditioning', 'wifi', 'pets', 'price', 'from_date', 'to_date'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
