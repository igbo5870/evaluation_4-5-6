<?php

namespace App\Http\Controllers;

class BookingController extends Controller
{
    public function getCustomers()
    {
        $customers = DB::table('customers')->get();

        return view('booking', compact('customers'));
    }
}
