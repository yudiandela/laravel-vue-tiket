@extends('layouts.form')

@section('title', '404 not found')

@section('content')
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg">
            <!-- 404 Error Text -->
            <div class="text-center p-5">
                <h1 class="mb-0 text-gray-800 mx-auto" data-text="404">404</h1>
                <p class="lead text-gray-800 mb-5">Page Not Found</p>
                <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                <a href="{{ route('index') }}">&larr; Back to Homepage</a>
            </div>
        </div>
    </div>
</div>
@endsection
