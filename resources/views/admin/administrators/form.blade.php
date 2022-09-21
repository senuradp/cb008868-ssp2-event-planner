@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white p-4">
            <form method="POST" action="{{ $administrator->id ? route('admin.administrators.update', $administrator->id) : route('admin.administrators.store') }}">

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                @if ($administrator->id)
                    @method('PUT')
                @endif

                @csrf

                <h5> Admin Details</h5>

                <hr>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <x-form-input  id="name" name="name" label="Name" type="text" value="{{ $administrator->name }}" help="Admin Name"  />
                    </div>
                    <div class="col-md-6">
                        <x-form-input  id="email" name="email" label="Email" type="email" value="{{ $administrator->email }}" help="Email"  />
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
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
        </div>
    </div>
</div>
@endsection
