<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if ($keyword == 'apartmani') {
            return redirect()->route('apartments.index');
        } elseif ($keyword == 'apartman') {
            return redirect()->route('apartments.index');
        } elseif ($keyword == 'rezervacije') {
            return redirect()->route('reservations.index');
        } elseif ($keyword == 'rezervacija') {
            return redirect()->route('reservations.index');
        } elseif ($keyword == 'zarada') {
            return redirect()->route('reservations.total_made');
        } elseif ($keyword == 'ukupna zarada') {
            return redirect()->route('reservations.total_made');
        } elseif ($keyword == 'korisnici') {
            return redirect()->route('users.index');
        } elseif ($keyword == 'korisnik') {
            return redirect()->route('users.index');
        }
    }

}
