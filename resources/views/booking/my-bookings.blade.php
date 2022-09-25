@extends('layouts.layout')
@section('title', 'Booking')

@section('content')

    <div class="container">

        {{-- display the booking of the user --}}
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-3 mb-3">My Bookings</h2>

                <div id="pat_appointments" class="tab-pane fade show active">
                    <div class="row row-grid">
                        @if ($bookings && $bookings->count())
                            @foreach ($bookings as $booking)
                                <div class="col-md-6 col-lg-4">
                                    <div class="profile-widget">
                                        <div class="doc-img">
                                            <a href="">
                                                <img class="img-fluid" alt="{{ $booking->name }}"
                                                    src="{{ $booking->event->image }}" class="img-fluid w-25 rounded">
                                            </a>
                                        </div>
                                        <div class="pro-content">
                                            <h3 class="title">
                                                <a href="">{{ $booking->event->name }}</a>
                                            </h3>
                                            <div class="profile-info d-flex mb-0">
                                                <a href="#" class="profile-img">
                                                    <span class="profile-pro">{{ $booking->event->location }}</span>
                                                    <br>
                                                    <span class="profile-pro">Category :
                                                        {{ $booking->event->category->title }}</span>
                                                    <span class="profile-pro"> | </span>
                                                    <span class="profile-pro">Date : {{ $booking->date }}</span>
                                            </div>
                                            <hr>
                                            <div class="row row-sm">
                                                <div class="col-12">
                                                    <a href="{{ route('user.booking.my-bookings-detailed', $booking->id) }}"
                                                        class="btn view-btn" style="font-size: 13px;">View booking
                                                        Details</a>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                @foreach ($booking->event->categories as $category)
                                                    <span class="badge bg-primary"
                                                        style="font-size:13px">{{ $category->title }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <h1 class="display-5 fw-bold text-center">Sorry !</h1>
                                    <p class="text-center"> No Bookings Found !</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
