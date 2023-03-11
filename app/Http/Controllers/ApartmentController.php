<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Price;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('apartments.index', compact('apartments'));
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function prices_table($id)
{
    $apartment = Apartment::find($id);
    // retrieve prices data from database
    $prices = Price::where('apartment_id', $this->$apartment->id)
        ->orderBy('from_date', 'asc')
        ->get();

    $table = [];
    $previous_price = 0;
    foreach ($prices as $price) {
        $from_date = $price->from_date;
        $to_date = $price->to_date;
        $current_price = $price->price;

        // calculate the price for the next period
        if ($previous_price > 0) {
            $current_price = $previous_price + $previous_price * 0.1;
        }

        // add data to the table array
        $table[] = [
            'from_date' => $from_date,
            'to_date' => $to_date,
            'price' => $current_price,
        ];

        $previous_price = $current_price;
    }

    return view('apartments.prices_table', compact('table'));
}

}
