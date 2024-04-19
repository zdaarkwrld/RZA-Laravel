<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingController extends Controller
{

    public function add(Request $request)
    {
        // Create a new booking

        if ($request->filled('name') && !is_string($request->name)) {
            return redirect()->back()->with('error', 'Invalid Input for Name');
        }
        if ($request->filled('email') && !filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Invalid Input for Email');
        }
        if ($request->filled('phone') && !is_numeric($request->phone)) {
            return redirect()->back()->with('error', 'Invalid Input for Phone');
        }
        if ($request->filled('date') && !strtotime($request->date)) {
            return redirect()->back()->with('error', 'Invalid Input for Date');
        }
        if ($request->filled('time') && !strtotime($request->time)) {
            return redirect()->back()->with('error', 'Invalid Input for Time');
        }
        if ($request->filled('service') && !is_string($request->service)) {
            return redirect()->back()->with('error', 'Invalid Input for Service');
        }
        if ($request->filled('quantity') && !is_numeric($request->quantity)) {
            return redirect()->back()->with('error', 'Invalid Input for Quantity');
        }
        if ($request->filled('message') && !is_string($request->message)) {
            return redirect()->back()->with('error', 'Invalid Input for Message');
        }

        $booking = new Bookings;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->service = $request->service;
        $booking->quantity = $request->quantity;
        $booking->message = $request->message;
        $booking->total_cost = $request->total_cost;
        return redirect()->back()->with('success', 'Booking was successfull');
    }

}

