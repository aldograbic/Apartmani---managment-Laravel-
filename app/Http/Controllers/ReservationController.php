<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Reservation;
use App\Models\User;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('apartment', 'user')->get();
        return view('reservations.index', compact('reservations'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function total_made()
    {
        $total_price = Reservation::sum('full_price');
        return view('reservations.total_made', compact('total_price'));
    }
}
