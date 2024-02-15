@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h2 class="card-title mb-0">{{ $article->title }}</h2>
                    </div>
                    @if ($article->image)
                        <img src="{{ asset('images/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}"
                            style="object-fit: cover; height: 300px;">
                    @endif
                    <div class="card-body">
                        <p class="card-text"><strong>Category:</strong> {{ $article->category }}</p>
                        <p class="card-text">{{ $article->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Created on: {{ $article->created_at ? $article->created_at->format('F j, Y, g:i a') : 'N/A' }}
                    </div>
                </div>
                <a href="{{ route('patient.articles') }}" class="btn btn-outline-primary">Back to Articles</a>
            </div>
        </div>
    </div>
@endsection
