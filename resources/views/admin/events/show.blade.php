@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $event->name }}</div>

                    {{-- 'name', --}}
                    {{-- 'url', --}}
                    {{-- 'description', --}}
                    {{-- 'date', --}}
                    {{-- 'time', --}}
                    {{-- 'location', --}}
                    {{-- 'contact', --}}
                    {{-- 'email', --}}
                    {{-- 'link', --}}

                    <div class="card-body">
                        {{-- {{ dd($event->getFirstMediaUrl('images')) }} --}}
                        <img class="img-fluid mb-3" src="{{ $event->getFirstMediaUrl('images') }}" alt="{{ $event->name }}">


                        <p class="mb-3">
                            {{ $event->description }}
                        </p>

                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{ $event->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">URL</th>
                                    <td>{{ $event->url }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date</th>
                                    <td>{{ $event->date }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Time</th>
                                    <td>{{ $event->time }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Location</th>
                                    <td>{{ $event->location }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact</th>
                                    <td>{{ $event->contact }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $event->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Link</th>
                                    <td><a href="{{ $event->link }}">{{ $event->link }}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
