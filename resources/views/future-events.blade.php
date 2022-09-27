@extends('layouts.layout')
@section('title', 'Events')

@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-3 theiaStickySidebar">

                    <div class="profile-sidebar">
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li class="ml-md-3 mt-3">
                                        <h4>Event Categories</h4>
                                    </li>
                                    <li>
                                        <a href="{{ route('future-events') }}" class="text-decoration-none">
                                            <span>All events</span>
                                        </a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="{{ request()->get('cid') == $category->id ? 'bg-primary' : '' }}">
                                            <a href="{{ route('future-events') }}?cid={{ $category->id }}"
                                                class="text-decoration-none">
                                                <span>{{ $category->title }}</span>
                                            </a>
                                        </li>
                                    @endforeach
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
                                        <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Future
                                            Events</a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="tab-content pt-0">

                                {{-- Expired events --}}
                                {{-- <div class="tab-pane fade inactive-event" id="pat_Programss"> --}}
                                <div id="pat_appointments" class="tab-pane fade show active">
                                    <div class="row row-grid">
                                        {{-- display the events where event date > than today --}}
                                        @if ($events && $events->count())
                                            @foreach ($events as $event)
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="profile-widget">
                                                        <div class="doc-img">
                                                            <a href="{{ route('events.show', $event->url) }}">
                                                                <img class="img-fluid" alt="{{ $event->name }}"
                                                                    src="{{ $event->getFirstMediaUrl('images', 'thumb') }}"
                                                                    class="img-fluid w-25 rounded">
                                                            </a>
                                                            {{-- <a href="javascript:void(0)" class="fav-btn" title="Inactive">
                                                                <i class="far fa-eye-slash"></i>
                                                            </a> --}}
                                                        </div>
                                                        <div class="pro-content">
                                                            <h3 class="title">
                                                                <a
                                                                    href="{{ route('events') }}?cid={{ $event->category->id }}">
                                                                    <span>Category : {{ $event->category->title }}</span>
                                                                </a>
                                                                <br>
                                                                <a
                                                                    href="{{ route('events.show', $event->url) }}">{{ $event->name }}</a>
                                                            </h3>
                                                            <p class="add-cont">{{ $event->location }}</p>
                                                            <div class="profile-info d-flex mb-0">
                                                                <a href="speaker-profile.html" class="profile-img">
                                                                    <span class="profile-pro">Date :
                                                                        {{ $event->date }}</span>
                                                                    {{-- <span class="profile-pro">Contact : {{ $event->contact }}</span> --}}
                                                                </a>
                                                                {{-- <a href="speaker-profile.html">
                                                                    <span class="profile-name">{{ $event->contact }}</span>
                                                                    <span class="profile-pro">{{ $event->date }}</span>
                                                                </a> --}}
                                                            </div>
                                                            <hr>
                                                            <p class="add-cont">
                                                                {{ Str::limit(strip_tags($event->description), 100, $end = '...') }}
                                                            </p>
                                                            <br>
                                                            <div class="row row-sm">
                                                                <div class="col-6">
                                                                    <a href="{{ route('events.show', $event->url) }}"
                                                                        class="btn view-btn" style="font-size: 11px;">View
                                                                        Event Details</a>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                @foreach ($event->categories as $category)
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
                                                    <p class="text-center"> No Events Found Currently!</p>
                                                </div>
                                            </div>
                                        @endif
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
