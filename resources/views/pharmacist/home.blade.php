@extends('layouts.app')

@section('content')
    <!-- Custom Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome, {{ Auth::user()->name }}</h1>
                <h3>{{ Auth::user()->role }}</h3>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p>&copy; 2022 Zafarullah Naushad. All Rights Reserved.</p>
        </div>
        <div class="footer">
            <p><a href="#"><i class="fa fa-facebook"></i></a></p>
            <p><a href="#"><i class="fa fa-twitter"></i></a></p>
            <p><a href="#"><i class="fa fa-instagram"></i></a></p>
            <p><a href="#"><i class="fa fa-linkedin"></i></a></p>
        </div>
        <div class="footer">
            <p><a href="#">Privacy Policy</a></p>
            <p><a href="#">Terms of Use</a></p>
        </div>
    </footer>
@endsection
