@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{ $user->first_name }} {{ $user->last_name }}'s Profile</h1>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('user.profile.update') }}">

                                @csrf

                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                                <div class="row form-row">
                                    <div class="col-12 col-md-12">
                                        <x-form-input  id="avatar" name="avatar" label="Profile Image" type="file" help="Please upload a profile image with the resolution of 180px X 180px"
                                            value="/storage/{{ $user->avatar }}" />
                                            {{-- <div class="col-4">
                                                <img src="/storage/" id="avatar-img" class="w-100">
                                            </div> --}}
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="first_name" name="first_name" label="First Name" type="text" value="{{ $user->first_name }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="last_name" name="last_name" label="Last Name" type="text" value="{{ $user->last_name }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="name" name="name" label="User Name" type="text" value="{{ $user->name }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="email" name="email" label="Email" type="email" value="{{ $user->email }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="password" name="password" label="Password" type="password" value="" help="Minimum 8 characters"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="password_confirmation" name="password_confirmation" label="Password Confirmation" type="password" value="" help="Minimum 8 characters"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="phone" name="phone" label="Phone" type="text" value="{{ $user->phone }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <x-form-input  id="nic" name="nic" label="NIC" type="text" value="{{ $user->nic }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <x-form-input  id="address" name="address" label="Address" type="text" value="{{ $user->address }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="form-group">
                                            <x-form-input  id="city" name="city" label="City" type="text" value="{{ $user->city }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="form-group">
                                            <x-form-input  id="state" name="state" label="State" type="text" value="{{ $user->state }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="form-group">
                                            <x-form-input  id="zip" name="zip" label="Zip" type="text" value="{{ $user->zip }}" help=""/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="form-group">
                                            <x-form-input  id="country" name="country" label="Country" type="text" value="{{ $user->country }}" help=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn ">Update Profile Details</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
