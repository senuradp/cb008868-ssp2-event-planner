@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center bg-white shadow-lg">

            <div class="col-12 mb-3 mt-3">
                <a href="{{ route('admin.bookings.create') }}" class="btn btn-primary"> Add Booking </a>
            </div>

            <div class="col-md-12 bg-white">

                {{-- show events and bookings details --}}

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Event</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Booking Date</th>
                                {{-- bookings count --}}
                                {{-- <th scope="col">No. of Bookings</th> --}}
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <th scope="row">{{ $booking->id }}</th>
                                    <td>{{ $booking->first_name }}</td>
                                    <td>{{ $booking->last_name }}</td>
                                    <td>{{ $booking->event->name }}</td>
                                    <td>{{ $booking->email }}</td>
                                    <td>{{ $booking->phone }}</td>
                                    <td>{{ $booking->created_at->format('d-m-Y') }}</td>
                                    {{-- bookings count --}}
                                    {{-- <td>{{ $booking->event->bookings->count() }}</td> --}}
                                    <td>
                                        <a href="{{ route('admin.bookings.show', $booking->id) }}"
                                            class="btn btn-success">View</a>
                                        <a href="{{ route('admin.bookings.edit', $booking->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form id="model-delete-{{ $booking->id }}"
                                            action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                onclick=" confirm('Are you sure?') ? document.getElementById('model-delete-{{ $booking->id }}').submit() : ''"
                                                class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        @endsection
