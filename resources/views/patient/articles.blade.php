<!-- resources/views/patient/articles/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Articles</h2>
        @foreach ($articles as $article)
            <div class="card mb-3">
                <div class="row g-0">
                    @if ($article->image)
                        <div class="col-md-4">
                            <img src="{{ asset('images/' . $article->image) }}" class="img-fluid rounded-start"
                                alt="{{ $article->title }}">
                        </div>
                    @endif
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->summary }}</p>
                            <p class="card-text"><small class="text-muted">Category: {{ $article->category }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
