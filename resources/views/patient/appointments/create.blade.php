@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Appointment</h2>
        <form method="POST" action="{{ route('patient.appointments.store') }}">
            @csrf
            <div class="mb-3">
                <label for="appointment_date" class="form-label">Appointment Date</label>
                <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" required>
            </div>
            <div class="mb-3">
                <label for="pharmacist_id" class="form-label">Pharmacist</label>
                <select class="form-select" id="pharmacist_id" name="pharmacist_id" required>
                    <option value="">Select Pharmacist</option>
                    @foreach ($pharmacists as $pharmacist)
                        <option value="{{ $pharmacist->id }}">{{ $pharmacist->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes (optional)</label>
                <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Appointment</button>
        </form>
    </div>
@endsection
