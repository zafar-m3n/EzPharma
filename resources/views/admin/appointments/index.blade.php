@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Appointments</h1>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-primary">Add New</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Appointment Date</th>
                    <th>Booked Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->patient->name }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ $appointment->created_at }}</td>
                        <td class="text-capitalize">{{ $appointment->status }}</td>
                        <td>{{ $appointment->notes }}</td>
                        <td>
                        <td>
                            <form action="{{ route('admin.appointments.approve', $appointment->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>
                            <form action="{{ route('admin.appointments.decline', $appointment->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Decline</button>
                            </form>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
