<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Booking;
use Auth;

class BookingController extends Controller
{

    public function add(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'service_id' => 'required',
            'message' => 'nullable|string',
        ]);

        // Create a new booking
        $user_id = Auth::id();
        $booking = new Booking;
        $booking->user_id = $user_id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone_number = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->service_id = $request->service_id ;
        $booking->hotel = $request->filled('hotel');

        $booking->message = $request->message;

        $service = Service::find($request->service_id);
        $booking->total_cost = $service->price;

        if ($request->filled('hotel')) {
            $booking->total_cost += 70.99;
        }

        $booking->save();

        return redirect()->back()->with('success', 'Booking was successful');
    }

    public function getBookings(Request $request)
    {
        $user_id = Auth::id();
        $bookings = Booking::where('user_id', $user_id)->get();
        return view('bookings', ['bookings' => $bookings]);
    }
}
