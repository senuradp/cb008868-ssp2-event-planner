@extends('layouts.layout')
@section('title', 'Booking')

@section('content')

    <div class="content success-page-cont">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h3>Booking Successful !</h3>
                                <br>
                                <p>
                                    Your booking has been placed successfully. You will receive a confirmation email shortly.
                                </p>
                                <br>

                                <a href="{{ route('home') }}" class="btn btn-primary view-inv-btn">Go back Home</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
