<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
