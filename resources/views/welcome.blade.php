@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
                    <div class="text-center">
                        <img src="{{ asset('images/logo.png') }}" alt="image" class="img-fluid mb-4">
                        <!-- Paragraph about the app -->
                        <p class="mb-4 fs-2">Welcome to EzPharma, the best pharmacy management app.</p>
                        <!-- Get Started Button -->
                        <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
