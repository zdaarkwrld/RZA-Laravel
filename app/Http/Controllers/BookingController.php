<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingController extends Controller
{

    public function add(AddBookingsRequest $request)
    {
        // Create a new booking

        if ($request->filled('name') && !is_string($request->name)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }
        if ($request->filled('email') && !is_string($request->email)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }
        if ($request->filled('phone ') && !is_integer($request->phone)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }
        if ($request->filled('date') && !is_integer($request->date)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }
        if ($request->filled('time') && !is_integer($request->time)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }
        if ($request->filled('service') && !is_string($request->service)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }
        if ($request->filled('message') && !is_string($request->message)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }
        if ($request->filled('message') && !is_string($request->message)) {
            return redirect()->back()->with('error', 'Invalid Input');
        }

        $booking = new Bookings;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->service = $request->service;
        $booking->message = $request->message;
        $booking->total_cost = $request->total_cost;
        return redirect()->back()->with('success', 'Booking was successfull');
    }
    }
}

