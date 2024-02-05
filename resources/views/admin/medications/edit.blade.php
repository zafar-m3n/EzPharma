@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Medication</h1>

        <form action="{{ route('admin.medications.update', $medication->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Medication_Name" class="form-label">Medication Name</label>
                <input type="text" class="form-control" id="Medication_Name" name="Medication_Name"
                    value="{{ $medication->Medication_Name }}" required>
            </div>

            <div class="mb-3">
                <label for="Stock_Count" class="form-label">Stock Count</label>
                <input type="number" class="form-control" id="Stock_Count" name="Stock_Count"
                    value="{{ $medication->Stock_Count }}" required>
            </div>

            <div class="mb-3">
                <label for="Expiry_Date" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" id="Expiry_Date" name="Expiry_Date"
                    value="{{ $medication->Expiry_Date }}" required>
            </div>

            <div class="mb-3">
                <label for="Category" class="form-label">Category</label>
                <input type="text" class="form-control" id="Category" name="Category"
                    value="{{ $medication->Category }}" required>
            </div>

            <div class="mb-3">
                <label for="Supplier_Details" class="form-label">Supplier Details</label>
                <textarea class="form-control" id="Supplier_Details" name="Supplier_Details" rows="3" required>{{ $medication->Supplier_Details }}</textarea>
            </div>

            <div class="mb-3">
                <label for="Cost_Price" class="form-label">Cost Price</label>
                <input type="number" class="form-control" id="Cost_Price" name="Cost_Price"
                    value="{{ $medication->Cost_Price }}" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="Selling_Price" class="form-label">Selling Price</label>
                <input type="number" class="form-control" id="Selling_Price" name="Selling_Price"
                    value="{{ $medication->Selling_Price }}" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Medication</button>
        </form>
    </div>
@endsection
