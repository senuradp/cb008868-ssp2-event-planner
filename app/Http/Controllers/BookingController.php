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
        return view('booking.booking', [
            'package' => $package,
        ]);
    }

    public function bookEvent(Request $request)
    {


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

        return redirect()->route('user.booking.success')->with('success', 'Booking has been created successfully!');
    }

    public function success()
    {

        return view('booking.success');
    }

    public function myBookings()
    {

        // get the authenticated user
        $user = auth()->user();

        // get the user's bookings
        $bookings = $user->bookings;

        return view('booking.my-bookings', [
            'user' => $user,
            'bookings' => $bookings,
        ]);
    }

    public function myBookingsDetailed(Request $request, string $id)
    {

        $booking = (new Booking())
            ->newQuery()
            ->where('id', $id)
            ->first();

        if (!$booking) {
            return abort(404);
        }

        return view('booking.my-booking-detailed', [
            'booking' => $booking
        ]);
    }

    public function customerReview(){

        $attributes = request()->validate([
            'booking_id' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $booking = Booking::where('id',$attributes['booking_id'])->first();

        $booking->update([
            'rating' => $attributes['rating'],
            'comment' => $attributes['comment'],
        ]);

        return redirect()->route('user.booking.my-bookings')->with('success','Review submitted !');
    }

}
