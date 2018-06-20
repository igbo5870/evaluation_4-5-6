<?php

namespace App\Http\Controllers;

use DB;

class bedroomsController extends Controller
{
    public function getData()
    {
        $dataRoom = DB::table('rooms')->get();
        $rooms = DB::table('rooms')->join('bed_types', 'rooms.bed_type_id', '=', 'bed_types.id')
                                    ->get();

        return view('bedrooms', compact('rooms', 'dataRoom'));
    }

    public function show($name)
    {
        $rooms = DB::table('rooms')->join('bed_types', 'rooms.bed_type_id', '=', 'bed_types.id')
        ->join('views', 'rooms.view_id', '=', 'views.id')
        ->join('bathroom_types', 'rooms.bathroom_type_id', '=', 'bathroom_types.id')
        ->where('name', $name)->get();

        return view('bedroom', compact('rooms'));
    }
}
