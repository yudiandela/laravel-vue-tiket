@extends('layouts.form')

@section('title', 'Login')

@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="/img/ic-bus.png" width="80" alt="">
                                <h1 class=" h4 text-gray-900 my-4">
                                    {{ __('Login Area!') }}
                                </h1>
                            </div>
                            <form action="{{ route('login') }}" method="POST" class="user">
                                @csrf

                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        value="{{ old('email') }}" id="InputEmail" placeholder="Email Address...">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        id="InputPassword" placeholder="Password">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
                                </button>
                            </form>

                            @if (Route::has('reset') OR Route::has('register'))
                            <hr>
                            @endif

                            @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="small" href="#">{{ __('Forgot Your Password?') }}</a>
                            </div>
                            @endif

                            @if (Route::has('register'))
                            <div class="text-center">
                                <a class="small" href="{{ route('register') }}">{{ __('Create an Account!') }}</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
