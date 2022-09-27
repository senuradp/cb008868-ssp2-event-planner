@extends('layouts.layout')

@section('title', 'Reviews')

@section('content')
    <div class="content">
        <div class="container">
            <h2>My Reviews</h2>
            <hr>
            <div class="row">
                <div class="blog-content col-12">
                    {{-- <hr> --}}
                    <div class="row">
                        @if ($bookings && $bookings->count())
                            @foreach ($bookings as $booking)
                                {{-- table to display package details --}}
                                {{-- print tables in 3 columns --}}
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Booking id : </td>
                                                <td> {{ $booking->id }}</td>
                                            </tr>
                                            <tr>
                                                <td>Event name : </td>
                                                <td>{{ $booking->event->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Reviewed by : </td>
                                                <td>{{ $booking->first_name }} {{ $booking->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Event date : </td>
                                                <td>{{ $booking->event->date }}</td>
                                            </tr>
                                            <tr>
                                                <td>Review Posted : </td>
                                                <td>{{ $booking->updated_at }}</td>
                                            </tr>
                                            <tr>
                                                <td>Review Posted : </td>
                                                <td>
                                                    @if ($booking->rating == 5)
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                    @elseif ($booking->rating == 4)
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                    @elseif ($booking->rating == 3)
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                    @elseif ($booking->rating == 2)
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                    @elseif ($booking->rating == 1)
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star filled"></i>
                                                    @else
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Comment :</td>
                                                <td>{{ $booking->comment }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="{{ route('user.booking.my-bookings-detailed', $booking->id) }}"
                                                        class="btn btn-primary w-100">View Review</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>

                                {{-- <div>
                            <br>
                            <hr>
                        </div> --}}
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <h1 class="display-5 fw-bold text-center">Sorry !</h1>
                                    <p class="text-center"> No Reviews Found !</p>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
