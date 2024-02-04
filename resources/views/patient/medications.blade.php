<!-- resources/views/patient/medications/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Medications</h2>
        <div class="row">
            @foreach ($medications as $medication)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $medication->Medication_Name }}</h5>
                            <p class="card-text">Stock: {{ $medication->Stock_Count }}</p>
                            <p class="card-text">Expiry: {{ $medication->Expiry_Date }}</p>
                            <p class="card-text">Category: {{ $medication->Category }}</p>
                            <p class="card-text">Supplier: {{ $medication->Supplier_Details }}</p>
                            <p class="card-text">Cost: ${{ $medication->Cost_Price }}</p>
                            <p class="card-text">Selling Price: ${{ $medication->Selling_Price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
