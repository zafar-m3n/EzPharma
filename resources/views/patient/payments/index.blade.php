@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Your Payment History</h2>
        <div class="list-group">
            @foreach ($payments as $payment)
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Payment on {{ $payment->payment_date }}</h5>
                        <small>Status: {{ $payment->status }}</small>
                    </div>
                    <p class="mb-1">Amount: ${{ $payment->amount }}</p>
                    <p class="mb-1">Method: {{ $payment->method }}</p>
                    <p class="mb-1">{{ $payment->details }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
