@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 bg-white p-4">
            <form method="POST" action="{{ $user->id ? route('admin.users.update', $user->id) : route('admin.users.store') }}" enctype="multipart/form-data">

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                @if ($user->id)
                    @method('PUT')
                @endif

                @csrf

                <h5> User Details</h5>

                <hr>
                <br>

                <div class="row">
                    <div class="col-12">
                        <x-form-input  id="avatar" name="avatar" label="Profile Image" type="file" help="Please upload a profile image with the resolution of 180px X 180px"
                        value="/storage/{{ $user->avatar }}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <x-form-input  id="name" name="name" label="Name" type="text" value="{{ $user->name }}" help="User Name"  />
                    </div>
                    <div class="col-md-6">
                        <x-form-input  id="email" name="email" label="Email" type="email" value="{{ $user->email }}" help="Email"  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <x-form-input  id="password" name="password" label="Password" type="password" value="" help="Min 8"  />
                    </div>
                    <div class="col-md-6">
                        <x-form-input  id="password_confirmation" name="password_confirmation" label="Confirm Password" type="password" value="" help="Min 8"  />
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <x-form-input  id="first_name" name="first_name" label="First Name" type="text" value="{{ $user->first_name }}" help="First Name"  />
                    </div>
                    <div class="col-md-12">
                        <x-form-input  id="last_name" name="last_name" label="Last Name" type="text" value="{{ $user->last_name }}" help="Last Name"  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <x-form-input  id="phone" name="phone" label="Phone" type="text" value="{{ $user->phone }}" help="Phone"  />
                    </div>
                    <div class="col-md-6">
                        <x-form-input  id="nic" name="nic" label="NIC" type="text" value="{{ $user->nic }}" help="National Identity Card"  />
                    </div>
                </div>

                <div class="mb-4">
                    <x-form-input  id="address" name="address" label="Address" type="text" value="{{ $user->address }}" help="Address"  />
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <x-form-input  id="city" name="city" label="City" type="text" value="{{ $user->city }}" help="City"  />
                    </div>
                    <div class="col-md-6">
                        <x-form-input  id="state" name="state" label="State" type="text" value="{{ $user->state }}" help="State"  />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <x-form-input  id="zip" name="zip" label="Zip" type="text" value="{{ $user->zip }}" help="Zip Code"  />
                    </div>
                    <div class="col-md-6">
                        <x-form-input  id="country" name="country" label="Country" type="text" value="{{ $user->country }}" help="Country"  />
                    </div>
                </div>

                <div class="col-md-12">
                    <x-form-select id="role" name="role" label="Role" type="text" value="{{ $user->role }}" help="User Role" placeholder="Select Role"
                        :options="['admin','user','manager']"/>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
        </div>
    </div>
</div>
@endsection
