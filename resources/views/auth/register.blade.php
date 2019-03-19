@extends('layouts.form')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body">
                    <div class="p-5">
                        <div class="text-center">
                            <img src="/img/ic-bus.png" width="80" alt="">
                            <h1 class=" h4 text-gray-900 my-4">
                                {{ __('Form Register') }}
                            </h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <div class="col-lg">
                                    <input id="name" type="text" class="form-control form-control-user{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="Enter your name" name="name" value="{{ old('name') }}" required
                                        autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg">
                                    <input id="email" type="email" class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="Enter valid email" name="email" value="{{ old('email') }}"
                                        required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg">
                                    <input id="password" type="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        placeholder="Your strong password" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg">
                                    <input id="password-confirm" type="password" class="form-control form-control-user"
                                        placeholder="Password confirm" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        @if (Route::has('login'))
                        <hr>

                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">{{ __('Already have an account? Login!!') }}</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
