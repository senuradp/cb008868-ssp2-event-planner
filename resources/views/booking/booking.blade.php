@extends('layouts.layout')
@section('title', 'Booking')

@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $package->event->name }}</h4>
                        </div>
                        <div class="card-body">

                            <div class="blog-content">
                                <img class="img-fluid" alt="{{ $package->event->name }}"
                                    src="{{ $package->event->getFirstMediaUrl('images') }}" class="img-fluid w-25 rounded">
                            </div>
                            <br>
                            <h3 class="blog-title">Event Details</h3>
                            <br>
                            <div class="blog-content">
                                <p>
                                    Event Category : {{ $package->event->category->title }}
                                </p>
                            </div>
                            <br>
                            <div class="blog-content">
                                <p>
                                    Event Contact Email : {{ $package->event->email }}
                                </p>
                            </div>
                            <br>
                            <div class="blog-content">
                                <p>
                                    Event Contact Number : {{ $package->event->contact }}
                                </p>
                            </div>
                            <div class="blog-content">
                                <p>
                                    {!! $package->event->description !!}
                                </p>
                            </div>
                            <hr>

                            {{-- Packacge details --}}
                            <h3 class="blog-title">Package Details</h3>
                            <br>
                            <div class="blog-content">
                                <p>
                                    {{ $package->title }}
                                </p>
                            </div>
                            <br>
                            <div class="blog-content">
                                <p>
                                    {{ $package->description }}
                                </p>
                            </div>

                            <hr>


                            <form action="{{ route('user.booking.bookEvent',$package->id) }}" method="POST">

                                @csrf

                                <input type="hidden" name="event_id" value="{{ $package->event->id }}">
                                <input type="hidden" name="package_id" value="{{ $package->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="date" value="{{ $package->event->date }}">
                                <input type="hidden" name="total_price" value="{{ $package->price }}">


                                {{-- <div class="info-widget"> --}}
                                    <h4 class="blog-title mt-3 mb-3">Personal Information</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <x-form-input  id="first_name" name="first_name" label="First Name" type="text" value="{{ auth()->user()->first_name }}" help=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <x-form-input  id="last_name" name="last_name" label="Last Name" type="text" value="{{ auth()->user()->last_name }}" help=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <x-form-input  id="email" name="email" label="Email" type="text" value="{{ auth()->user()->email }}" help=""  />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <x-form-input  id="phone" name="phone" label="Phone" type="text" value="{{ auth()->user()->phone }}" help=""/>
                                            </div>
                                        </div>
                                    </div>
                                {{-- </div> --}}
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn w-100 mt-3">Book Now</button>
                                </div>


                                {{-- <div class="payment-widget">
                                    <h4 class="card-title">Payment Method</h4>

                                    <div class="payment-list">
                                        <label class="payment-radio credit-card-option">
                                            <input type="radio" name="radio" checked>
                                            <span class="checkmark"></span>
                                            Credit card
                                        </label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group card-label">
                                                    <label for="card_name">Name on Card</label>
                                                    <input class="form-control" id="card_name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group card-label">
                                                    <label for="card_number">Card Number</label>
                                                    <input class="form-control" id="card_number"
                                                        placeholder="1234  5678  9876  5432" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group card-label">
                                                    <label for="expiry_month">Expiry Month</label>
                                                    <input class="form-control" id="expiry_month" placeholder="MM"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group card-label">
                                                    <label for="expiry_year">Expiry Year</label>
                                                    <input class="form-control" id="expiry_year" placeholder="YY"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group card-label">
                                                    <label for="cvv">CVV</label>
                                                    <input class="form-control" id="cvv" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="payment-list">
                                        <label class="payment-radio paypal-option">
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                            Paypal
                                        </label>
                                    </div>


                                    <div class="terms-accept">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="terms_accept">
                                            <label for="terms_accept">I have read and accept <a href="#">Terms &amp;
                                                    Conditions</a></label>
                                        </div>
                                    </div>


                                    <div class="submit-section mt-4">
                                        <button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
                                    </div>

                                </div> --}}
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-4 theiaStickySidebar">

                    <div class="card booking-card">
                        <div class="card-header">
                            <h4 class="card-title">Booking Summary</h4>
                        </div>
                        <div class="card-body">

                            <div class="booking-summary">
                                <div class="booking-item-wrap">
                                    <ul class="booking-date">
                                        <li>Event Name <span>{{ $package->event->name }}</span></li>
                                        <li>Event Location <span>{{ $package->event->location }}</span></li>
                                        <li>Event Date <span>{{ $package->event->date }}</span></li>
                                        <li>Event Time <span>{{ $package->event->time }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="booking-summary">
                                <div class="booking-item-wrap">
                                    <ul class="booking-date">
                                        <li>Package Name <span>{{ $package->title }}</span></li>
                                    </ul>
                                    <ul class="booking-fee">
                                        <li>Package Price<span> LKR {{ number_format($package->price, 2) }}</span></li>
                                    </ul>
                                    {{-- select quantity ticket quantity to calculate total cost --}}
                                    <div class="booking-total">
                                        <ul class="booking-total-list">
                                            <li>
                                                <span>Total</span>
                                                <span class="total-cost"> LKR {{ number_format($package->price, 2) }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
