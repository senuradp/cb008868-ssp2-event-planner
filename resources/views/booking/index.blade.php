@extends('layouts.layout')
@section('title', 'Booking')

@section('content')

    <div class="container">

        {{-- display the booking of the user --}}
        <div class="row">
            <div class="col-md-12">
                <h1>My Bookings</h1>
                <div id="pat_appointments" class="tab-pane fade show active">
                    <div class="row row-grid">
                        @if ($bookings && $bookings->count())
                            @foreach ($bookings as $booking)
                                <div class="col-md-6 col-lg-4">
                                    <div class="profile-widget">
                                        <div class="doc-img">
                                            <a href="{{ route('user.bookings.show', $booking->url) }}">
                                                <img class="img-fluid" alt="{{ $booking->name }}"
                                                    src="{{ $booking->getFirstMediaUrl('images', 'thumb') }}"
                                                    class="img-fluid w-25 rounded">
                                            </a>
                                            {{-- <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                <i class="far fa-eye-slash"></i>
                                            </a> --}}
                                        </div>
                                        <div class="pro-content">
                                            <h3 class="title">
                                                {{-- <a href="{{ route('user.my-bookings') }}?cid={{ $booking->category->id }}"> --}}
                                                    <span>Category : {{ $booking->category->title }}</span>
                                                {{-- </a> --}}
                                                <br>
                                                <a href="{{ route('user.bookings.show', $booking->url) }}">{{ $booking->name }}</a>
                                            </h3>
                                            <p class="add-cont">{{ $booking->location }}</p>
                                            <div class="profile-info d-flex mb-0">
                                                <a href="speaker-profile.html" class="profile-img">
                                                    <span class="profile-pro">Date :
                                                        {{ $booking->date }}</span>
                                                    {{-- <span class="profile-pro">Contact : {{ $booking->contact }}</span> --}}
                                                </a>
                                                {{-- <a href="speaker-profile.html">
                                                    <span class="profile-name">{{ $booking->contact }}</span>
                                                    <span class="profile-pro">{{ $booking->date }}</span>
                                                </a> --}}
                                            </div>
                                            <hr>
                                            <p class="add-cont">
                                                {{ Str::limit(strip_tags($booking->description), 100, $end = '...') }}
                                            </p>
                                            <br>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <a href="{{ route('user.bookings.show', $booking->url) }}" class="btn view-btn"
                                                        style="font-size: 11px;">View
                                                        booking Details</a>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                @foreach ($booking->categories as $category)
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
                                    <p class="text-center"> No bookings Found For This Category Currently!</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    @endsection
