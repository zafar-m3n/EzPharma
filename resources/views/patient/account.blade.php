@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>My Account</h2>
        <form>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            {{-- Add other fields as necessary --}}
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
