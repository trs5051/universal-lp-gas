@extends('backend.layouts.auth-master')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ url('/home') }}">
                        <img class="align-content" src="images/logo.png" alt="" style="max-width: 85%;">
                        <!-- <h1> <b > Universal LP Gas</b></h1> -->
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="password">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>

                            @if (Route::has('password.request'))
                            <label class="pull-right">
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </label>
                            @endif
                        </div>


                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>

                        <div class="registera-link m-3 text-center">
                            <!-- <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
