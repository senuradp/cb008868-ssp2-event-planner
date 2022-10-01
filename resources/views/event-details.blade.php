@extends('layouts.layout')

@section('title', $event->name)


@section('content')

    <section class="event-bg">
        <div class="container">
            <div class="col-md-12 col-lg-12">
                <div class="banner-header text-center">
                    <h1>{{ $event->name }}</h1>
                    <p>{{ Str::limit(strip_tags($event->description), 25, $end = '...') }}</p>
                    <div class="rating">
                        @if ($event->bookings)
                        {{-- {{  dd($event->bookings) }} --}}
                            @foreach (range(0, 4) as $rating)
                            <i class="fas fa-star {{  event_rating($event) > $rating ? 'filled' : '' }}"></i>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <span class="d-inline-block">{{ event_rating($event) }}</span>
                        @if ($event->bookings)
                        {{-- {{  dd($event->bookings) }} --}}
                            @foreach (range(0, 4) as $rating)
                            <i class="fas fa-star {{  event_rating($event) > $rating ? 'filled' : '' }}"></i>
                            @endforeach
                        @endif
                    </div>
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
                                    src="{{ $event->image  ?  $event->getFirstMediaUrl('images', 'thumb') : '/assets/img/blog/default-full.jpg' }}">
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
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 sidebar-right">

                    <div class="card category-widget">
                        <div class="card-header">
                            <h4 class="card-title">Quick Info
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="height:25px;">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>

                            </h4>
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
                                            Location
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
                                            Date
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
                                            Time
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
                                            Contact
                                        </td>
                                        <td>{{ $event->contact }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="height:25px;">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                            </svg>

                                            Email
                                        </td>
                                        <td>{{ $event->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="card category-widget">
                        <div class="card-header">
                            <h4 class="card-title">Event Analytics
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="height: 30px">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                </svg>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="fs-6"><i class="fa fa-eye" aria-hidden="true"></i> This page has {{ $event->view_count }} views.</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="fs-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" style="height: 25px">
                                                    <path strokeLinecap="round" strokeLinejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                                                  </svg>
                                                This event has {{ $event->bookings->count() }} registration(s) </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>


            <div class="blog blog-single-post">
                <h3 class="mt-4">Packages <i class="fa fa-suitcase" aria-hidden="true"></i></h3>
                <hr>
                <div class="blog-content col-12">
                    {{-- <hr> --}}
                    <div class="row">



                        @foreach ($event->packages as $package)
                            {{-- table to display package details --}}
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Package Name</td>
                                            <td>{{ $package->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Package Price</td>
                                            <td>LKR {{ number_format($package->price, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Package Description</td>
                                            <td>{{ $package->description }}</td>
                                        </tr>
                                        {{-- book now button --}}
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="{{ route('user.booking.show', $package->id) }}"
                                                    class="btn btn-primary w-100">Book Now</a>
                                                {{-- <a href="#" class="btn btn-primary w-100">Book Now</a> --}}
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
                    </div>
                </div>
            </div>

            <div class="blog blog-single-post">
                <div class="card blog-comments clearfix">
                    <div class="card-header">
                        <h4 class="">Reviews For {{ $event->name }}</h4>
                    </div>
                    @foreach ($event->bookings as $review)
                        <div class="card-body pb-0">
                            <ul class="comments-list">
                                <li>
                                    <div class="comment">
                                        <div class="comment-author">
                                            <img class="avatar" alt="" src="/assets/img/avatar.jpeg">
                                        </div>
                                        <div class="comment-block">
                                            <span class="comment-by">
                                                <span class="blog-author-name">{{ $review->first_name }} {{ $review->last_name }}</span>
                                            </span>
                                            @if (event_rating($event) == 5)
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block">{{ event_rating($event) }}/5</span>
                                            @elseif (event_rating($event) == 4)
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block">{{ event_rating($event) }}/5</span>
                                            @elseif (event_rating($event) == 3)
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block">{{ event_rating($event) }}/5</span>
                                            @elseif (event_rating($event) == 2)
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block">{{ event_rating($event) }}/5</span>
                                            @elseif (event_rating($event) == 1)
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block">{{ event_rating($event) }}/5</span>
                                            @else
                                                No ratings yet !
                                            @endif
                                            <p>{{ $review->comment }}</p>
                                            <p class="blog-date">{{ $review->updated_at->format('d M Y') }}</p>
                                            {{-- <a class="comment-btn" href="#">
                                                <i class="fas fa-reply"></i> Reply
                                            </a> --}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- <div class="blog blog-single-post">
                <div class="card new-comment clearfix">
                    <div class="card-header">
                        <h4 class="card-title">Leave Comment</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Rating <span class="text-danger">*</span></label>
                                <select name="rating" id="rating" class="custom-select focus-shadow-0">
                                    <option value="5">★★★★★ (5/5)</option>
                                    <option value="4">★★★★☆ (4/5)</option>
                                    <option value="3">★★★☆☆ (3/5)</option>
                                    <option value="2">★★☆☆☆ (2/5)</option>
                                    <option value="1">★☆☆☆☆ (1/5)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Comment</label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}


        </div>
    </div>

@endsection
