@extends('layouts.auth-master')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ url('/home') }}">
                        <img class="align-content" src="images/logo.png" alt="" style="max-width: 85%;">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group ">
                            <label for="name">{{ __('Name') }}</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  value="{{ old('name') }}" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="password">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{ old('name') }}"  required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign Up</button>

                        <div class="login-link m-3 text-center">
                            <p>Have already an account ? <a href="{{ route('login') }}"> Sign In Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
