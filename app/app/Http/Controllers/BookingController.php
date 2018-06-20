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

    public function index()
    {
    }

    public function create()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->arrival_date = request('date_arrivals');
        $booking->departure_date = request('date_departure');
        $booking->customers = request('customer');
        $booking->booking_status = $request('status');

        $booking->save();

        return redirect()->routes('bedroom/{name}/booking/validate');
    }

    public function save_data(Request $request)
    {
        Booking::create($request->all());

        return redirect()->route('bedroom/{name}/booking/validate');
    }
}
