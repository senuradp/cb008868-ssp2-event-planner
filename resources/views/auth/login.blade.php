@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="content">
            <div class="row mb-5">
                <div class="col-md-8 offset-md-2">
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-5 login-left">
                                <img src="/assets/img/login-banner.png" class="img-fluid" alt="Login image" />
                            </div>
                            <div class="col-md-12 col-lg-7 login-right">
                                <div class="login-header">
                                    <h3>Login</h3>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group form-focus">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="focus-label">Password</label>
                                    </div>

                                    {{-- <div class="row"> --}}
                                    {{-- <div class="text-left ml-4">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div> --}}

                                    <div class="text-right">
                                        @if (Route::has('password.request'))
                                            <a style="font-size: 14px" class="forgot-link"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block btn-lg login-btn">
                                        {{ __('Login') }}
                                    </button>

                                    <div class="text-center dont-have">
                                        Don’t have an account?
                                        <a href="/register">Register</a>
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
