@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Notifications</h2>
        @foreach ($notifications as $notification)
            <div class="card {{ $notification->is_read ? '' : '' }} mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $notification->title }}</h5>
                    <p class="card-text">{{ $notification->message }}</p>
                    <p class="card-text"><small class="text-muted">{{ $notification->sent_at }}</small>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
