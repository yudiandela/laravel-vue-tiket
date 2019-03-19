@extends('layouts.main')

@section('title', '- My Profile')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('My Profile') }}</h1>
    <a href="{{ route('user.profile.edit', Auth::user()->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-user-edit fa-sm text-white-50"></i>
        {{ __('Edit Profile') }}
    </a>
</div>

<div class="row mb-4">

    @if (session('success'))
    <div class="col-12">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
    @endif

    <div class="col-lg-4">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-2 text-center">
                <img src="/img/ismael-seck.jpg" alt="" width="320" height="500">
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body row">
                <div class="col-md-3">
                    Nama
                    <br>
                    Email
                </div>
                <div class="col-md-1">
                    :
                    <br>
                    :
                </div>
                <div class="col-md-8">
                    {{ Auth::user()->name }}
                    <br>
                    {{ Auth::user()->email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
