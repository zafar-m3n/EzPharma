@extends('layouts.app')

@section('content')

    <head>
        <style>
            .card {
                border: 2.3px solid #010c80;
                border-radius: 7.5px;
            }

            .card-header {
                background-color: #010c80;
                color: white;
            }
        </style>
    </head>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Your Appointments</h2>
            <a href="{{ route('patient.appointments.create') }}" class="btn btn-primary">Book Appointment</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card md-2">
                        <div class="card-header">{{ __('Upcoming Appointments') }}</div>
                        <div class="card-body p-0">
                            <table class="table-striped table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Patient</th>
                                        <th scope="col">Pharmacist</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($upcomingAppointments->reverse() as $appointment)
                                        <tr>
                                            <td>{{ $appointment->id }}</td>
                                            <td>{{ $appointment->patient->name }}</td>
                                            <td>{{ $appointment->pharmacist->name }}</td>
                                            <td>{{ $appointment->appointment_date }}</td>
                                            <td>{{ $appointment->appointment_time }}</td>
                                            <td>{{ $appointment->status }}</td>
                                            <td>{{ $appointment->notes }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card md-2">
                        <div class="card-header">{{ __('Confirmed Appointments') }}</div>
                        <div class="card-body p-0">
                            <table class="table-striped table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Patient</th>
                                        <th scope="col">Pharmacist</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($confirmedAppointments->reverse() as $appointment)
                                        <tr>
                                            <td>{{ $appointment->id }}</td>
                                            <td>{{ $appointment->patient->name }}</td>
                                            <td>{{ $appointment->pharmacist->name }}</td>
                                            <td>{{ $appointment->appointment_date }}</td>
                                            <td>{{ $appointment->appointment_time }}</td>
                                            <td>{{ $appointment->status }}</td>
                                            <td>{{ $appointment->notes }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card md-2">
                        <div class="card-header">{{ __('Past Appointments') }}</div>
                        <div class="card-body p-0">
                            <table class="table-striped table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Patient</th>
                                        <th scope="col">Pharmacist</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pastAppointments->reverse() as $appointment)
                                        <tr>
                                            <td>{{ $appointment->id }}</td>
                                            <td>{{ $appointment->patient->name }}</td>
                                            <td>{{ $appointment->pharmacist->name }}</td>
                                            <td>{{ $appointment->appointment_date }}</td>
                                            <td>{{ $appointment->appointment_time }}</td>
                                            <td>{{ $appointment->status }}</td>
                                            <td>{{ $appointment->notes }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
@endsection
