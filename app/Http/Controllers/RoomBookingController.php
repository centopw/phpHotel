<?php

namespace App\Http\Controllers;

use App\Models\hotels;
use App\Models\RoomBooking;
use App\Models\rooms;
use Illuminate\Http\Request;

class RoomBookingController extends Controller
{
    public function bookRoom($user_id, $room_id, $name)
    {
        $hotel = hotels::where('name', $name)->get();
        $rooms = rooms::where('status', 1)->get();
        return view('hotels.roombooking', compact('hotel', 'rooms', 'user_id', 'room_id'));
    }

    public function addbooking(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'total_members' => 'required',
            'date' => 'required',
            'time' => 'required',
            'arrival_date' => 'required',
            'depature_date' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        RoomBooking::create([
            'user_id' => $request->user_id,
            'hotel_id' => $request->hotel_id,
            'room_id' => $request->room_id,
            'name' => $request->name,
            'total_members' => $request->total_members,
            'date' => $request->date,
            'time' => $request->time,
            'arrival_date' => $request->arrival_date,
            'depature_date' => $request->depature_date,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        session()->flash('message', 'Request Send Successfully!');
        return back();
    }

    public function filterBookings(Request $request)
    {
        $query = RoomBooking::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->has('phone_number')) {
            $query->where('phone_number', 'like', '%' . $request->phone_number . '%');
        }

        if ($request->has('date')) {
            $query->where('date', $request->date);
        }

        $bookings = $query->paginate(10);

        return view('filter-booking.index', compact('bookings'));
    }
}
