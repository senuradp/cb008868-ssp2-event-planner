@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-9 offset-md-2">

                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4 col-lg-5 login-left">
                                <img src="/assets/img/login-banner.png" class="img-fluid" alt="Pathivu Register">
                            </div>
                            <div class="col-md-12 col-lg-7 login-right">
                                <div class="login-header">
                                    {{-- <h3>Customer Register <a href="speaker-register.html">Are you a speaker?</a></h3> --}}
                                    <h3>Customer Register <a href="speaker-register.html"></a></h3>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group form-focus">

                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="focus-label">Name</label>
                                    </div>

                                    <div class="form-group form-focus">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="focus-label">Email</label>
                                    </div>

                                    <div class="form-group form-focus">

                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="focus-label">Password</label>
                                    </div>

                                    <div class="form-group form-focus">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                        <label class="focus-label">Confirm Password</label>
                                    </div>

                                    <div class="terms-and-policy pt-2 pb-2">
                                        <input type="checkbox" required name="checkbox" value="check" id="agree"/>
                                        <span class="agree"> I agree to these
                                            <span class="terms">
                                                <a href="term-condition.html" target="_blank">Terms of Use</a>
                                                and
                                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                                            </span>
                                        </span>
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-block btn-lg login-btn">
                                        {{ __('Register') }}
                                    </button>

                                    <div class="text-center dont-have">
                                        Already have an account? <a href="/login">Login</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
