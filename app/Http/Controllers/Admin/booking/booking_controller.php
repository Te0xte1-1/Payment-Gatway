<?php

namespace App\Http\Controllers\Admin\booking;

use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\booking_period;
use App\Models\booking_type;
use App\Models\floor;
use App\Models\room_type;
use App\Models\Treasures;
use App\Models\visiotrs_type;
use Illuminate\Http\Request;

class booking_controller extends Controller
{
    public function index()
    {

        $bookings = booking::where('is_approved', 1)->get();
        $floors = floor::all();
        $booking_periods = booking_period::all();
        $booking_types = booking_type::all();
        $room_types = room_type::all();
        $visitors_types = visiotrs_type::all();
        $Treasures = Treasures::all();
        return view('booking.index', compact('floors', 'booking_periods', 'booking_types', 'bookings', 'room_types', 'visitors_types', 'Treasures'));
    }
    public function taken()
    {

        return view('booking.taken');
    }
    public function detailse()
    {

        return view('booking.detailse');
    }
    public function store(Request $request)
    {

        $insert_booking = booking::create([

            "booking_serial" => $request->Booking_Serial,
            "booking_period" => $request->Booking_Period,
            "booking_type" => $request->Booking_Type,
            "visitors_type" =>  $request->Visitor_Type,
            "floor_number" => $request->Floor,
            "room_type" =>  $request->Room_Type,
            "room_number" =>  $request->Room_Number,
            "booking_name" =>  $request->Full_Name,
            "count_family" => $request->count_family,
            'is_approved' => 1,

        ]);
        if ($insert_booking) {
            return redirect()->back();
        } else {
            return "error";
        }
    }
    public function edit($id)
    {
    }
    public function update($id)
    {
    }
    public function delete($id)
    {
    }
}
