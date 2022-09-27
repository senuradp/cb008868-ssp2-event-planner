@extends('layouts.layout')
@section('title', 'Home')

@section('content')
    <section class="section section-banner">
        <div class="container">
            <div class="banner-wrapper">
                <div class="wrapper-content text-center">
                    <div class="banner-header">
                        <h1>Find the best event hall</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris </p>
                    </div>
                    <div class="search-box">
                        <form action="https://pathivu-laravel.dreamguystech.com/events/public/search">
                            <div class="form-search">
                                <div class="form-inner">
                                    <div class="form-group search-info">
                                        <i class="fas fa-expand-arrows-alt bficon"></i>
                                        <input type="text" class="form-control" placeholder="Search Event Hall">
                                    </div>
                                    <div class="form-group search-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input type="text" class="form-control" placeholder="Location">
                                        <a class="current-loc-icon" href="javascript:void(0);"><i
                                                class="fas fa-crosshairs"></i></a>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn mt-0"><i
                                            class="fas fa-search"></i> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Popular Section-->
    <section class="popular-events">
        <div class="container">
            <div class="section-wraper row d-flex align-items-center">
                <div class="col-md-6 section-header mb-0">
                    <p>#popular events hall</p>
                    <h2>find the event hallS.</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('events') }}" class="view-all">View all</a>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="service-box">
                        <div class="service-img">
                            <img src="assets/img/img-08.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="overlay-content">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block">3.5</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <a href="event-details.html">
                                        <h3>Mint Park Hall</h3>
                                    </a>
                                </li>
                                <li>
                                    <p>New Jersey, United States</p>
                                </li>
                                <li>
                                    <h4>150 Seats</h4>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="booking.html" class="btn bok-btn" tabindex="0">Book Now</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">$ 200.00/HR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-img">
                            <img src="assets/img/img-05.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="overlay-content">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block">5</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <a href="event-details.html">
                                        <h3>Ark Royal Venue</h3>
                                    </a>
                                </li>
                                <li>
                                    <p>Maryland, United States</p>
                                </li>
                                <li>
                                    <h4>400 Seats</h4>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="booking.html" class="btn bok-btn" tabindex="0">Book Now</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">$ 450.00/HR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="service-box">
                        <div class="service-img">
                            <img src="assets/img/img-09.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="overlay-content">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block">3</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <a href="event-details.html">
                                        <h3>Sea Shore Hall</h3>
                                    </a>
                                </li>
                                <li>
                                    <p>Pennsylvania, United States</p>
                                </li>
                                <li>
                                    <h4>200 Seats</h4>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="booking.html" class="btn bok-btn" tabindex="0">Book Now</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">$ 650.00/HR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="service-box">
                        <div class="service-img">
                            <img src="assets/img/img-06.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="overlay-content">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block">5</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <a href="event-details.html">
                                        <h3>Lake View Hall</h3>
                                    </a>
                                </li>
                                <li>
                                    <p>California, United States</p>
                                </li>
                                <li>
                                    <h4>500 Seats</h4>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="booking.html" class="btn bok-btn" tabindex="0">Book Now</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">$ 250.00/HR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-img">
                            <img src="assets/img/img-07.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="overlay-content">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block">2</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <a href="event-details.html">
                                        <h3>Mountain Hill Hall</h3>
                                    </a>
                                </li>
                                <li>
                                    <p>Indiana, United States</p>
                                </li>
                                <li>
                                    <h4>320 Seats</h4>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="booking.html" class="btn bok-btn" tabindex="0">Book Now</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">$ 700.00/HR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="service-box">
                            <div class="service-img">
                                <img src="{{ $event->getFirstMediaUrl('images', 'thumb') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="overlay-content">
                                <div class="rating">
                                    @if ($event->bookings)
                                    {{-- {{  dd($event->bookings) }} --}}
                                        @foreach (range(0, 4) as $rating)
                                        <i class="fas fa-star {{  event_rating($event) > $rating ? 'filled' : '' }}"></i>
                                        @endforeach
                                        <span class="d-inline-block">{{ event_rating($event) }}</span>
                                    @endif

                                    {{-- @if ($event->booking->rating == 5)
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    @elseif ($event->booking->rating == 4)
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    @elseif ($event->booking->rating == 3)
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    @elseif ($event->booking->rating == 2)
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    @elseif ($event->booking->rating == 1)
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
                                    @endif --}}

                                </div>
                                <ul class="available-info">
                                    <li>
                                        <a href="event-details.html">
                                            <h3>{{ $event->name }}</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <p>{{ $event->location }}</p>
                                    </li>
                                    <li>
                                        <h4>{{ $event->bookings ? $event->bookings->count() : 0 }} Bookings</h4>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="booking.html" class="btn bok-btn" tabindex="0">Book Now</a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">$
                                            200.00/HR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--Fututre Events Section-->
    {{-- <section class="news-events">
        <div class="container">
            <div class="section-wraper row d-flex align-items-center">
                <div class="col-md-6 section-header mb-0">
                    <p>#FEATURED EVENTS</p>
                    <h2>Upcoming new events.</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="events.html" class="view-all">View all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="event-slider" class="owl-carousel owl-theme testimonial-slider event-slider slider">

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="event-details.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/events/event-01.jpg">
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="date-sec">
                                    <h3>MAR
                                        <span>2021</span>
                                    </h3>
                                </div>
                                <h3 class="title">
                                    <span>workshop</span>
                                    <a href="event-details.html">Marketing Analysis!</a>
                                </h3>
                                <p class="add-cont">308 Stoney Road, Florida</p>
                                <div class="profile-info d-flex">
                                    <a href="speaker-profile.html" class="profile-img">
                                        <img src="assets/img/profile/profile-01.jpg" alt="">
                                    </a>
                                    <a href="speaker-profile.html">
                                        <span class="profile-name">ms. Annie</span>
                                        <span class="profile-pro">ceo - turbofloid</span>
                                    </a>
                                </div>
                                <div class="row row-sm seat-details">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-04.png"
                                                    alt=""></a>
                                            <a href="#">
                                                <span class="available-info">Available Seats</span>
                                                <span class="price-info">210/265</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-05.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Timings</span>
                                                <span class="price-info">12:30 - 02:00 PM</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$250.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="event-details.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/events/event-02.jpg">
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="date-sec">
                                    <h3>FEB
                                        <span>2021</span>
                                    </h3>
                                </div>
                                <h3 class="title">
                                    <span>CULTURAL EVENTS</span>
                                    <a href="event-details.html">Training Gadgets</a>
                                </h3>
                                <p class="add-cont">1265 Twin Drive, Michigan</p>
                                <div class="profile-info d-flex">
                                    <a href="speaker-profile.html" class="profile-img">
                                        <img src="assets/img/profile/profile-02.jpg" alt="">
                                    </a>
                                    <a href="speaker-profile.html">
                                        <span class="profile-name">ms. Caia Earle</span>
                                        <span class="profile-pro">Chairmam</span>
                                    </a>
                                </div>
                                <div class="row row-sm seat-details">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-04.png"
                                                    alt=""></a>
                                            <a href="#">
                                                <span class="available-info">Available Seats</span>
                                                <span class="price-info">210/265</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-05.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Timings</span>
                                                <span class="price-info">12:30 - 02:00 PM</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$300.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="event-details.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/events/event-03.jpg">
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="date-sec">
                                    <h3>FEB
                                        <span>2021</span>
                                    </h3>
                                </div>
                                <h3 class="title">
                                    <span>TECH, Digital</span>
                                    <a href="event-details.html">Digital World</a>
                                </h3>
                                <p class="add-cont">4960 Pot Road, New Jersey</p>
                                <div class="profile-info d-flex">
                                    <a href="speaker-profile.html" class="profile-img">
                                        <img src="assets/img/profile/profile-03.jpg" alt="">
                                    </a>
                                    <a href="speaker-profile.html">
                                        <span class="profile-name">ms. Tilli Devlin</span>
                                        <span class="profile-pro">Chief Executive</span>
                                    </a>
                                </div>
                                <div class="row row-sm seat-details">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-04.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Available Seats</span>
                                                <span class="price-info">210/265</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-05.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Timings</span>
                                                <span class="price-info">12:30 - 02:00 PM</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$450.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="event-details.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/events/event-04.jpg">
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="date-sec">
                                    <h3>JAN
                                        <span>2021</span>
                                    </h3>
                                </div>
                                <h3 class="title">
                                    <span>DIGITAL EVENTS</span>
                                    <a href="event-details.html">Marketing Matters!</a>
                                </h3>
                                <p class="add-cont">2101 Raver Drive, Tennessee</p>
                                <div class="profile-info d-flex">
                                    <a href="speaker-profile.html" class="profile-img">
                                        <img src="assets/img/profile/profile-04.jpg" alt="">
                                    </a>
                                    <a href="speaker-profile.html">
                                        <span class="profile-name">mr. Adar Li</span>
                                        <span class="profile-pro">Managing Director</span>
                                    </a>
                                </div>
                                <div class="row row-sm seat-details">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-04.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Available Seats</span>
                                                <span class="price-info">210/265</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-05.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Timings</span>
                                                <span class="price-info">12:30 - 02:00 PM</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$270.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="event-details.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/events/event-05.jpg">
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="date-sec">
                                    <h3>DEC
                                        <span>2020</span>
                                    </h3>
                                </div>
                                <h3 class="title">
                                    <span>workshop</span>
                                    <a href="event-details.html">Heaven Events</a>
                                </h3>
                                <p class="add-cont">4482 Alpaca Way, Alaska</p>
                                <div class="profile-info d-flex">
                                    <a href="speaker-profile.html" class="profile-img">
                                        <img src="assets/img/profile/profile-05.jpg" alt="">
                                    </a>
                                    <a href="speaker-profile.html">
                                        <span class="profile-name">mr. Fuad Lyles</span>
                                        <span class="profile-pro">Former ceo - BP</span>
                                    </a>
                                </div>
                                <div class="row row-sm seat-details">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-04.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Available Seats</span>
                                                <span class="price-info">210/265</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-05.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Timings</span>
                                                <span class="price-info">12:30 - 02:00 PM</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$100.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="event-details.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/events/event-06.jpg">
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="date-sec">
                                    <h3>FEB
                                        <span>2021</span>
                                    </h3>
                                </div>
                                <h3 class="title">
                                    <span>Seminar</span>
                                    <a href="event-details.html">Marketing Matters!</a>
                                </h3>
                                <p class="add-cont">3849 Smith Road, Georgia</p>
                                <div class="profile-info d-flex">
                                    <a href="speaker-profile.html" class="profile-img">
                                        <img src="assets/img/profile/profile-06.jpg" alt="">
                                    </a>
                                    <a href="speaker-profile.html">
                                        <span class="profile-name">ms. Ansleigh</span>
                                        <span class="profile-pro">Marketing</span>
                                    </a>
                                </div>
                                <div class="row row-sm seat-details">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-04.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Available Seats</span>
                                                <span class="price-info">210/265</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);"><img src="assets/img/icon-05.png"
                                                    alt=""></a>
                                            <a href="javascript:void(0);">
                                                <span class="available-info">Timings</span>
                                                <span class="price-info">12:30 - 02:00 PM</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$450.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="speakers speaker-section">
        <div class="container">
            <div class="section-wraper row d-flex align-items-center">
                <div class="col-md-6 section-header mb-0">
                    <p>#POPULAR SPEAKERS</p>
                    <h2>Meet our first speakers.</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="map-grid.html" class="view-all">View all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="speaker-slider" class="owl-carousel owl-theme testimonial-slider event-slider slider">

                        <div class="single-team">
                            <div class="team-img">
                                <a href="speaker-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/speakers/speak01.jpg">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <a href="speaker-profile.html">Ava Charlotte</a>
                                </h3>
                                <p class="sub-title">Cultural Head</p>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$50 / Hr</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single-team">
                            <div class="team-img">
                                <a href="speaker-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/speakers/speak02.jpg">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <a href="speaker-profile.html">Siri Sanders</a>
                                </h3>
                                <p class="sub-title">Event Head</p>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$70 / Hr</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single-team">
                            <div class="team-img">
                                <a href="speaker-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/speakers/speak03.jpg">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <a href="speaker-profile.html">Deni Yates</a>
                                </h3>
                                <p class="sub-title">Managing Director</p>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$50 / Hr</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single-team">
                            <div class="team-img">
                                <a href="speaker-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/speakers/speak04.jpg">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <a href="speaker-profile.html">Brynn Fish</a>
                                </h3>
                                <p class="sub-title">Former CEO</p>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$50 / Hr</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single-team">
                            <div class="team-img">
                                <a href="speaker-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/speakers/speak05.jpg">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <a href="speaker-profile.html">Salvio Pino</a>
                                </h3>
                                <p class="sub-title">Chairman Unilever</p>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$50 / Hr</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single-team">
                            <div class="team-img">
                                <a href="speaker-profile.html">
                                    <img class="img-fluid" alt="User Image" src="assets/img/speakers/speak06.jpg">
                                </a>
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <a href="speaker-profile.html">Deni Yates</a>
                                </h3>
                                <p class="sub-title">Co-Founder</p>
                                <div class="row row-sm align-items-center d-flex">
                                    <div class="col-6">
                                        <a href="booking.html" class="now-btn">Book now <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="javascript:void(0);" class="amt-txt">$50 / Hr</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--Review Section-->
    {{-- <section class="testimonial-section reviews">
        <div class="container">
            <div class="section-wraper row d-flex align-items-center">
                <div class="col-md-8 col-lg-6 section-header mb-0">
                    <p>#TOP REVIEWS</p>
                    <h2>REVIEWS FROM OUR CUSTOMERS.</h2>
                </div>
                <div class="col-md-4 col-lg-6 text-right">
                    <a href="reviews.html" class="view-all">View all</a>
                </div>
            </div>
            <div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider ">
                <div class="single-testimonial">
                    <div class="client-info">
                        <div class="client-photo">
                            <img src="assets/img/testimonial/avatar-01.jpg" alt="">
                        </div>
                        <div class="client-details">
                            <h4 class="name">Shonda Williams</h4>
                            <div class="sub-title">Engineering</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">3.2</span>
                            </div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-info">
                        <div class="client-photo">
                            <img src="assets/img/testimonial/avatar-02.jpg" alt="">
                        </div>
                        <div class="client-details">
                            <h4 class="name">Grant Mason</h4>
                            <div class="sub-title">Cultural</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.1</span>
                            </div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-info">
                        <div class="client-photo">
                            <img src="assets/img/testimonial/avatar-03.jpg" alt="">
                        </div>
                        <div class="client-details">
                            <h4 class="name">Marion Scott</h4>
                            <div class="sub-title">Computer</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="average-rating">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-info">
                        <div class="client-photo">
                            <img src="assets/img/testimonial/avatar-04.jpg" alt="">
                        </div>
                        <div class="client-details">
                            <h4 class="name">Leonard Bender</h4>
                            <div class="sub-title">Business</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">2</span>
                            </div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-info">
                        <div class="client-photo">
                            <img src="assets/img/testimonial/avatar-05.jpg" alt="">
                        </div>
                        <div class="client-details">
                            <h4 class="name">Cheryl Bostick</h4>
                            <div class="sub-title">Cultural</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4</span>
                            </div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-info">
                        <div class="client-photo">
                            <img src="assets/img/testimonial/avatar-06.jpg" alt="">
                        </div>
                        <div class="client-details">
                            <h4 class="name">Martin Belvin</h4>
                            <div class="sub-title">Conference</div>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4</span>
                            </div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--News Section-->
    {{-- <section class="blog-wrapper">
        <div class="container">

            <div class="section-wraper row d-flex align-items-center">
                <div class="col-md-6 section-header mb-0">
                    <p>#OUR NEWS</p>
                    <h2>Our LATEST NEWS</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="blog-list.html" class="view-all">View all</a>
                </div>
            </div>

            <div class="row blog-grid-row">
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="content-wrapper">
                        <div class="blog-image">
                            <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg"
                                    alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <a href="javascript:void(0);" class="post-date"> <span> Posted on 25-01-2021 </span></a>
                            <h3 class="blog-title"><a href="blog-details.html">Tips to Succeed in an Online Course</a>
                            </h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod
                                tempor.</p>
                        </div>
                        <div class="blog-footer">
                            <a href="blog-details.html">View More <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="content-wrapper">
                        <div class="blog-image">
                            <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-02.jpg"
                                    alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <a href="javascript:void(0);" class="post-date"> <span> Posted on 25-01-2021 </span></a>
                            <h3 class="blog-title"><a href="blog-details.html">Tips to Succeed in an Online Course</a>
                            </h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod
                                tempor.</p>
                        </div>
                        <div class="blog-footer">
                            <a href="blog-details.html">View More <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="content-wrapper">
                        <div class="blog-image">
                            <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-03.jpg"
                                    alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <a href="javascript:void(0);" class="post-date"> <span> Posted on 25-01-2021 </span></a>
                            <h3 class="blog-title"><a href="blog-details.html">Tips to Succeed in an Online Course</a>
                            </h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod
                                tempor.</p>
                        </div>
                        <div class="blog-footer">
                            <a href="blog-details.html">View More <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
@endsection
