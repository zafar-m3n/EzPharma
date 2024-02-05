@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Medications</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('admin.medications.create') }}" class="btn btn-primary mb-3">Add New Medication</a>

        <table class="table-bordered table-striped table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Medication Name</th>
                    <th>Stock Count</th>
                    <th>Expiry Date</th>
                    <th>Category</th>
                    <th>Supplier Details</th>
                    <th>Cost Price</th>
                    <th>Selling Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medications as $medication)
                    <tr>
                        <td>{{ $medication->id }}</td>
                        <td>{{ $medication->Medication_Name }}</td>
                        <td>{{ $medication->Stock_Count }}</td>
                        <td>{{ $medication->Expiry_Date }}</td>
                        <td>{{ $medication->Category }}</td>
                        <td>{{ $medication->Supplier_Details }}</td>
                        <td>{{ $medication->Cost_Price }}</td>
                        <td>{{ $medication->Selling_Price }}</td>
                        <td>
                            <a href="{{ route('admin.medications.edit', $medication->id) }}"
                                class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('admin.medications.delete', $medication->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this medication?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
