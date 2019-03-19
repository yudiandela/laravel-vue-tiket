@extends('layouts.main')

@section('title', '- My Profile')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Edit My Profile') }}</h1>
</div>

<div class="row mb-4">
    <div class="col-lg-4">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-2 text-center">
                <img src="/img/ismael-seck.jpg" alt="" width="320" height="500">
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card row">
            <div class="card-body col-lg-6">
                <form action="{{ route('user.profile.update', Auth::user()->id) }}" class="user" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input id="name" name="name" placeholder="Your Name" type="text" class="form-control form-control-user{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            value="{{ Auth::user()->name ?: old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" name="email" placeholder="Enter email address" type="text" class="form-control form-control-user{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            value="{{ Auth::user()->email ?: old('email') }}">
                    </div>

                    <button class="btn btn-primary btn-user btn-block">
                        Update Data
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
