@extends('layouts.layout')
@section('title', 'Events')

@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-3 theiaStickySidebar">

                    <div class="profile-sidebar">
                        {{-- <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="assets/img/speakers/speaker-thumb-02.jpg" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3>Wayte Barlow</h3>
                                    <div class="customer-details">
                                        <h5 class="mb-0">MCA, BE - 10+ Years Experience</h5>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li>
                                        <a href="speaker-dashboard.html">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="events.html">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Events</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="my-customers.html">
                                            <i class="fas fa-user-injured"></i>
                                            <span>My customers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="schedule-timings.html">
                                            <i class="fas fa-hourglass-start"></i>
                                            <span>Schedule Timings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoices.html">
                                            <i class="fas fa-file-invoice"></i>
                                            <span>Invoices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="reviews.html">
                                            <i class="fas fa-star"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat-speaker.html">
                                            <i class="fas fa-comments"></i>
                                            <span>Message</span>
                                            <small class="unread-msg">23</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="speaker-profile-settings.html">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="social-media.html">
                                            <i class="fas fa-share-alt"></i>
                                            <span>Social Media</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="speaker-change-password.html">
                                            <i class="fas fa-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 col-lg-8 col-xl-9">
                    <div class="card event-service">
                        <div class="card-body py-0">

                            <nav class="user-tabs mb-4">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Active
                                            Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_Programss" data-toggle="tab">Inactive Events</a>
                                    </li>
                                </ul>
                            </nav>


                            <div class="tab-content pt-0">

                                <div id="pat_appointments" class="tab-pane fade show active">
                                    <div class="row row-grid">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-06.jpg">
                                                    </a>
                                                    <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                        <i class="far fa-eye-slash"></i>
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>Seminar</span>
                                                        <a href="event-details.html">Marketing Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">8 Northumberland Ave, Westminster,</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-06.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">ms. Ansleigh</span>
                                                            <span class="profile-pro">Marketing</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-05.jpg">
                                                    </a>
                                                    <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                        <i class="far fa-eye-slash"></i>
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>workshop</span>
                                                        <a href="event-details.html">Marketing Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">8 Northumberland Ave, Westminster,</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="#" class="profile-img">
                                                            <img src="assets/img/profile/profile-05.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">mr. Fuad Lyles</span>
                                                            <span class="profile-pro">Former ceo</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-01.jpg">
                                                    </a>
                                                    <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                        <i class="far fa-eye-slash"></i>
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>workshop</span>
                                                        <a href="event-details.html">Marketing Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">8 Northumberland Ave, Westminster,</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-01.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">ms. Annie</span>
                                                            <span class="profile-pro">ceo - turbofloid</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-04.jpg">
                                                    </a>
                                                    <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                        <i class="far fa-eye-slash"></i>
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>DIGITAL EVENTS</span>
                                                        <a href="event-details.html">Marketing Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">8 Northumberland Ave, Westminster,</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-04.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">mr. Adar Li</span>
                                                            <span class="profile-pro">Managing Director</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-03.jpg">
                                                    </a>
                                                    <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                        <i class="far fa-eye-slash"></i>
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>TECH, Digital</span>
                                                        <a href="event-details.html">Tech Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">8 Northumberland Ave, Westminster,</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-03.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">ms. Tilli Devlin</span>
                                                            <span class="profile-pro">Chief Executive</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-07.jpg">
                                                    </a>
                                                    <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                        <i class="far fa-eye-slash"></i>
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>Party</span>
                                                        <a href="event-details.html">New Year Event!</a>
                                                    </h3>
                                                    <p class="add-cont">North Carolina, United States</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-07.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">ms. Meirav Gatlin</span>
                                                            <span class="profile-pro">Chief Executive</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade inactive-event" id="pat_Programss">
                                    <div class="row row-grid">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-02.jpg">
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>CULTURAL EVENTS</span>
                                                        <a href="event-details.html">Marketing Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">8 Northumberland Ave, Westminster,</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-02.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">ms. Caia Earle</span>
                                                            <span class="profile-pro">Chairmam</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-01.jpg">
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>workshop</span>
                                                        <a href="event-details.html">Marketing Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">8 Northumberland Ave, Westminster,</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-01.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">ms. Annie</span>
                                                            <span class="profile-pro">ceo - BP</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-09.jpg">
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>CULTURAL EVENTS</span>
                                                        <a href="event-details.html">Marketing Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">Indiana, United States</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-09.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">mr. Adnan Lam</span>
                                                            <span class="profile-pro">Chairmam</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="profile-widget">
                                                <div class="doc-img">
                                                    <a href="event-details.html">
                                                        <img class="img-fluid" alt="User Image"
                                                            src="assets/img/events/event-08.jpg">
                                                    </a>
                                                </div>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <span>Sangeet EVENTS</span>
                                                        <a href="event-details.html">Wedding Matters!</a>
                                                    </h3>
                                                    <p class="add-cont">Alabama, USA</p>
                                                    <div class="profile-info d-flex mb-0">
                                                        <a href="speaker-profile.html" class="profile-img">
                                                            <img src="assets/img/profile/profile-08.jpg" alt="">
                                                        </a>
                                                        <a href="speaker-profile.html">
                                                            <span class="profile-name">mr. Flann Berlin</span>
                                                            <span class="profile-pro">Chairmam</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
