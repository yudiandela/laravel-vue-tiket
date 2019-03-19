@extends('layouts.form')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg my-5">

            <div class="card-body p-0">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="/img/ic-bus.png" width="80" alt="">
                                <h1 class=" h4 text-gray-900 my-4">
                                    {{ __('Reset your password!') }}
                                </h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ $email ?? old('email') }}" placeholder="Enter your email"
                                        required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" placeholder="Create New Password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control form-control-user"
                                        name="password_confirmation" placeholder="Confirm New Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Reset Password') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
