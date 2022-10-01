@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="blog-content col-12">
            <h1>Booking Details</h1>
            <hr>
            <div class="row">
                {{-- table to display package details --}}
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Booking ID</td>
                                <td>{{ $booking->id }}</td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>{{ $booking->first_name }}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{ $booking->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $booking->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $booking->phone }}</td>
                            </tr>
                            {{-- booking date --}}
                            <tr>
                                <td>Booking Date</td>
                                <td>{{ $booking->created_at->format('d-m-Y') }}</td>
                            </tr>
                            {{-- price --}}
                            <tr>
                                <td>Total Price</td>
                                <td>LKR {{ number_format($booking->total_price, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Event Name</td>
                                <td>{{ $booking->event->name }}</td>
                            </tr>
                            <tr>
                                <td>Event Date</td>
                                <td>{{ $booking->date }}</td>
                            </tr>
                            <tr>
                                <td>Event Time</td>
                                <td>{{ $booking->event->time }}</td>
                            </tr>
                            <tr>
                                <td>Event Location</td>
                                <td>{{ $booking->event->location }}</td>
                            </tr>
                            {{-- Pckage --}}
                            <tr>
                                <td>Package</td>
                                <td>{{ $booking->package->title }}</td>
                            </tr>
                            {{-- price --}}
                            <tr>
                                <td>Package Price</td>
                                <td>LKR {{ number_format($booking->total_price, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                    <table class="table table-striped" id="myTable">
                        <tbody>
                            {{-- rating --}}
                            <tr>
                                <td>Rating</td>
                                <td>
                                    @if ($booking->rating == 5)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block">{{ $booking->rating }}/5</span>
                                    @elseif ($booking->rating == 4)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block">{{ $booking->rating }}/5</span>
                                    @elseif ($booking->rating == 3)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block">{{ $booking->rating }}/5</span>
                                    @elseif ($booking->rating == 2)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block">{{ $booking->rating }}/5</span>
                                    @elseif ($booking->rating == 1)
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block">{{ $booking->rating }}/5</span>
                                    @else
                                        No ratings yet !
                                    @endif
                                </td>
                            </tr>
                            {{-- reviwed on --}}
                            <tr>
                                <td>Reviewed On</td>
                                <td>{{ $booking->updated_at->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <td>Review</td>
                                <td>
                                    @if ($booking->comment)
                                        {{ $booking->comment }}
                                    @else
                                        Not Reviewed
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
