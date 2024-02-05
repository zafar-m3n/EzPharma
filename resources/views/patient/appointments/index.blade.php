@extends('layouts.app')

@section('content')
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
        <div class="list-group">
            @foreach ($appointments as $appointment)
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Appointment on {{ $appointment->appointment_date }}</h5>
                        <small>Status: {{ $appointment->status }}</small>
                    </div>
                    <p class="mb-1">{{ $appointment->notes }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
