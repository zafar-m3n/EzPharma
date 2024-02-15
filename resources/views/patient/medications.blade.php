<!-- resources/views/patient/medications/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Medications</h2>
        <div class="row">
            @foreach ($medications as $medication)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ $medication->Medication_Image }}" class="card-img-top"
                            alt="{{ $medication->Medication_Name }}" style="width: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $medication->Medication_Name }}</h5>
                            <p class="card-text">Stock: {{ $medication->Stock_Count }}</p>
                            <p class="card-text">Selling Price: LKR{{ $medication->Selling_Price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
