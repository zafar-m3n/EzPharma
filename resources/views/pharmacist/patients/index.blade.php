@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Patients</h1>
        <table class="table-striped table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Appointments</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patientsData as $patient)
                    {{-- @dump($patient) --}}
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->appointments_count }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
