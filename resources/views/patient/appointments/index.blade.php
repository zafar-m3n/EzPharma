<!-- resources/views/patient/appointments/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Appointments</h2>
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
