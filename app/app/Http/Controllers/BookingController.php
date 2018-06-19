<?php

namespace App\Http\Controllers;

use DB;
use View;

class BookingController extends Controller
{
    public function getCustomers($name)
    {
        $customers = DB::table('customers')->get();
        $status = DB::table('booking_statuses')->get();
        $room = DB::table('rooms')->get()->where('name', $name);

        return View::make('booking')
            ->with('customers', $customers)
            ->with('status', $status)
            ->with('name', $name);
    }

    public function postBooking()
    {
        $booking = Input::get('data_arrivals');
    }
}
