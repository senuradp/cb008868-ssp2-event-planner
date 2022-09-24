@extends('layouts.layout')

@section('title', 'Event Details')

@section('content')

    <div class="content">
        <div class="container">
            <div class="row event-details align-items-center">
                <div class="col-lg-8 col-md-6">
                    <ul class="available-info">
                        <li>
                            <h2>{{ $event->name }} <i class="fas fa-check-circle verified text-success ml-2"></i></h2>
                        </li>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</p>
                        </li>
                    </ul>
                    <div class="rating">
                        <span class="d-inline-block">3.5</span>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star mr-2"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                    <a href="booking.html" class="btn book-btn">Book Now</a>
                    <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">$ 450.00/HR</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-view">
                        <div class="blog blog-single-post">
                            <div class="blog-image">
                                <a href="javascript:void(0);"><img alt="" src="assets/img/blog/blog-04.jpg"
                                        class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <img class="img-fluid" alt="{{ $event->name }}"
                                    src="{{ $event->getFirstMediaUrl('images') }}" class="img-fluid w-25 rounded">
                            </div>
                            <br>
                            <h3 class="blog-title">Event Details</h3>
                            <br>
                            <div class="blog-content">
                                <p>
                                    Event Category : {{ $event->category->title }}
                                </p>
                            </div>
                            <hr>
                            <div class="blog-content">
                                <p>
                                    {!! $event->description !!}
                                </p>
                            </div>
                            <br>
                            @if ($event->link)
                                <div class="blog-content">
                                    <p>
                                        Event Link : <a href="{{ $event->link }}">{{ $event->link }}</a>
                                    </p>
                                </div>
                            @endif
                        </div>

                        <div class="blog blog-single-post">
                            <h3 class="blog-title">Event Summary</h3>
                            <hr>
                            <div class="blog-content">
                                {{-- table --}}
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Event Location</td>
                                            <td>{{ $event->location }}</td>
                                        </tr>
                                        <tr>
                                            <td>Event Date</td>
                                            <td>{{ $event->date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Event Time</td>
                                            <td>{{ $event->time }}</td>
                                        </tr>
                                        <tr>
                                            <td>Event Contact</td>
                                            <td>{{ $event->contact }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- <div class="card blog-comments clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Reviews For Ark Royal Venue</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="rating mb-4">
                                    <span class="bg-success text-white">4.3</span>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(14 Rating)</span>
                                </div>
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img class="avatar" alt="" src="assets/img/customers/customer4.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <span class="comment-by">
                                                    <span class="blog-author-name">Mia Lerner</span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                                                    euismod odio, gravida pellentesque urna varius vitae, gravida
                                                    pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                                <p class="blog-date">Dec 6, 2020</p>
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="comments-list reply">
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img class="avatar" alt=""
                                                            src="assets/img/customers/customer5.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <span class="comment-by">
                                                            <span class="blog-author-name">Secorra Dowling</span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                            viverra euismod odio, gravida pellentesque urna varius vitae,
                                                            gravida pellentesque urna varius vitae.</p>
                                                        <p class="blog-date">Dec 6, 2020</p>
                                                        <a class="comment-btn" href="#">
                                                            <i class="fas fa-reply"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img class="avatar" alt=""
                                                            src="assets/img/customers/customer3.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <span class="comment-by">
                                                            <span class="blog-author-name">Axe Gibson</span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                            viverra euismod odio, gravida pellentesque urna varius vitae,
                                                            gravida pellentesque urna varius vitae.</p>
                                                        <p class="blog-date">December 7, 2020</p>
                                                        <a class="comment-btn" href="#">
                                                            <i class="fas fa-reply"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img class="avatar" alt="" src="assets/img/customers/customer6.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <span class="comment-by">
                                                    <span class="blog-author-name">Ellie Kent</span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p class="blog-date">December 11, 2020</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img class="avatar" alt="" src="assets/img/customers/customer7.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <span class="comment-by">
                                                    <span class="blog-author-name">Branice Grier</span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p class="blog-date">December 13, 2020</p>
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card new-comment clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Leave Comment</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email AdPartyess <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

                    <div class="card category-widget">
                        <div class="card-header">
                            <h4 class="card-title">Event Summary</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height:25px;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                            Event Location
                                        </td>
                                        <td>{{ $event->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height:25px;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                            </svg>
                                            Event Date
                                        </td>
                                        <td>{{ $event->date }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height:25px;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Event Time
                                        </td>
                                        <td>{{ $event->time }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height:25px;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
                                            Event Contact
                                        </td>
                                        <td>{{ $event->contact }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="card category-widget">
                        <div class="card-header">
                            <h4 class="card-title">Location</h4>
                        </div>
                        <div class="card-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4953.847368114557!2d-0.0632014717887672!3d51.62460711861799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761eef4dbfa641%3A0xc15b86649840d2ec!2sEdmonton%20Green%2C%20London%2C%20UK!5e0!3m2!1sen!2sin!4v1614591393541!5m2!1sen!2sin"
                                allowfullscreen=""></iframe>
                            <ul class="social-share mt-3">
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
