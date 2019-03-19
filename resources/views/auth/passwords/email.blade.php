@extends('layouts.form')

@section('title', 'Reset Password')

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

                            <form method="POST" action="{{ route('password.email') }}" class="user">
                                @csrf

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" placeholder="Enter your email address"
                                        required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
