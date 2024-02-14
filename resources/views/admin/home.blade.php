@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="container">

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="sidebar">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h2>Categories</h2>
                        </li>
                        <li class="list-group-item">Pain Relievers</li>
                        <li class="list-group-item">Antibiotics</li>
                        <li class="list-group-item">Antiseptics</li>
                        <li class="list-group-item">Vitamins</li>
                        <li class="list-group-item">Anti-allergic</li>
                    </ul>
                </div>
            </div>

            <!-- Main content -->
            <div class="col-md-8">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total
                                    Patients</h5>
                                <h1 class="card-text text-center">{{ $total_patients }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total
                                    Appointments</h5>
                                <h1 class="card-text text-center">{{ $total_appointments }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total
                                    Medications</h5>
                                <h1 class="card-text text-center">{{ $total_medications }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total
                                    Pharmacists</h5>
                                <h1 class="card-text text-center">{{ $total_pharmacists }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total
                                    Users</h5>
                                <h1 class="card-text text-center">{{ $total_users }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total
                                    Articles</h5>
                                <h1 class="card-text text-center">{{ $total_articles }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <h5 class="card-title text-center">Cancelled Appointments
                                </h5>
                                <h1 class="card-text text-center">{{ $total_cancelled_appointments }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    Pending Appointments</h5>
                                <h1 class="card-text text-center">{{ $total_pending_appointments }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success">
                            <div class="card-body">
                                <h5 class="card-title text-center">Completed Appointments</h5>
                                <h1 class="card-text text-center">{{ $total_completed_appointments }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="countdown-section">
        <h1>Upto 5% off on all products.</h1>
        <p>Terms & Conditions Apply</p>
        <p>For more information please call or WhatsApp us on +94 (77) 884 1577</p>

        <!-- Bootstrap Countdown Counter (You'll need to add JS for functionality) -->
        <div id="countdown">
            <div class="countdown-item">
                <span id="days">0</span>
                <p>Days</p>
            </div>
            <div class="countdown-item">
                <span id="hours">00</span>
                <p>Hours</p>
            </div>
            <div class="countdown-item">
                <span id="minutes">00</span>
                <p>Minutes</p>
            </div>
            <div class="countdown-item">
                <span id="seconds">00</span>
                <p>Seconds</p>
            </div>
        </div>

        <!-- Shop Now Button -->
        <a href="#" class="btn btn-primary">Shop Now</a>
    </div>
    <!-- Upload Prescription Section -->
    <div class="container">
        <div class="row upload-section align-items-center">
            <div class="col-md-6">
                <h2>UPLOAD YOUR PRESCRIPTION</h2>
                <p>Our pharmacy awards loyalty program members 1 point for every Rs. 100 spent in-store and on-line. Once
                    the
                    customer accumulates 100 points, they are eligible for redemption rewards on their future purchases.</p>
                <a href="#" class="btn btn-primary">UPLOAD NOW</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/upload.jpg') }}" alt="Upload" class="upload-image">
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
