<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Finance\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = (new Booking())
            ->newQuery()
            ->paginate(10);

        return view('admin.bookings.index',[
            'bookings' => $bookings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finance\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('admin.bookings.show', [
            'booking' => $booking
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finance\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Finance\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finance\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
