@extends('layouts.layout')

@section('title', 'Event Details')

@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $booking->event->name }}</h4>
                        </div>
                        <div class="card-body">

                            <div class="blog-content">
                                <img class="img-fluid" alt="{{ $booking->event->name }}"
                                    src="{{ $booking->package->event->getFirstMediaUrl('images') }}"
                                    class="img-fluid w-25 rounded">
                            </div>
                            <br>
                            <h3 class="blog-title">Event Details</h3>
                            <br>
                            <div class="blog-content">
                                <p>
                                    Event Category : {{ $booking->event->category->title }}
                                </p>
                            </div>
                            <br>
                            <div class="blog-content">
                                <p>
                                    Event Contact Email : {{ $booking->event->email }}
                                </p>
                            </div>
                            <br>
                            <div class="blog-content">
                                <p>
                                    Event Contact Number : {{ $booking->event->contact }}
                                </p>
                            </div>
                            <div class="blog-content">
                                <p>
                                    {!! $booking->event->description !!}
                                </p>
                            </div>
                            <hr>

                            {{-- Packacge details --}}
                            <h3 class="blog-title">Package Details</h3>
                            <br>
                            <div class="blog-content">
                                <p>
                                    {{ $booking->package->title }}
                                </p>
                            </div>
                            <br>
                            <div class="blog-content">
                                <p>
                                    {{ $booking->package->description }}
                                </p>
                            </div>

                            <hr>

                        </div>
                    </div>
                    <div class="blog blog-single-post">
                        <div class="card new-comment clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Leave Comment</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('user.review.submit') }}">
                                    @csrf

                                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">

                                    <div class="form-group">
                                        <label>Rating <span class="text-danger">*</span></label>
                                        <select name="rating" id="rating" class="custom-select focus-shadow-0">
                                            {{-- <option value="5" {{$booking->rating==5 ? 'selected':''}}>★★★★★ (5/5)</option> --}}
                                            <option value="5" {{ $booking->rating==5 ? 'selected':'' }}>★★★★★ (5/5)</option>
                                            <option value="4" {{ $booking->rating==4 ? 'selected':'' }}>★★★★☆ (4/5)</option>
                                            <option value="3" {{ $booking->rating==3 ? 'selected':'' }}>★★★☆☆ (3/5)</option>
                                            <option value="2" {{ $booking->rating==2 ? 'selected':'' }}>★★☆☆☆ (2/5)</option>
                                            <option value="1" {{ $booking->rating==1 ? 'selected':'' }}>★☆☆☆☆ (1/5)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <x-form-textarea  id="comment" name="comment" label="Comment" type="text" value="{{ $booking->comment }}" help="" />
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                                    </div>

                                </form>
                            </div>
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
                                        <li>Booking Id <span> {{ $booking->id }}</span></li>
                                        <li>Event Name <span>{{ $booking->package->event->name }}</span></li>
                                        <li>Event Location <span>{{ $booking->package->event->location }}</span></li>
                                        <li>Event Date <span>{{ $booking->package->event->date }}</span></li>
                                        <li>Event Time <span>{{ $booking->package->event->time }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
