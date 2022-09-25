<?php

namespace App\Http\Controllers;

use App\Models\Finance\Booking;
use App\Models\Finance\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show(Package $package)
    {
        // return to view with compact() function
        return view('booking.booking',[
            'package' => $package,
        ]);
    }

    public function bookEvent(Request $request){


        $request->validate([
            'event_id' => 'required',
            'package_id' => 'required',
            'user_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $package = Package::find($request->package_id);

        $booking = (new Booking())->create([
            'event_id' => $request->event_id,
            'package_id' => $request->package_id,
            'user_id' => $request->user_id,
            'date' => $request->date,
            'total_price' => $request->total_price,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
        ]);

        auth()->user()->notify((new \App\Notifications\BookingSuccess($booking)));

        // return redirect()->route('booking.index')->with('success', 'Booking has been created successfully!');
        return redirect()->route('user.booking.success');
    }

    public function success(){

        return view('booking.success');
    }

    public function index(){

        // get the authenticated user
        $user = auth()->user();

        // get the user's bookings
        $bookings = $user->bookings;

        return view('booking.index',[
            'user' => $user,
            'bookings' => $bookings,
        ]);
    }
}
