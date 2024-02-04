@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Articles</h2>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        @if ($article->image)
                            <img src="{{ asset('images/' . $article->image) }}" class="card-img-top"
                                alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->summary }}</p>
                            <a href="{{ route('admin.articles.show', $article->id) }}" class="btn btn-secondary">View</a>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                        <div class="card-footer text-muted">
                            Category: {{ $article->category }}
                            <br>
                            Posted on: {{ $article->created_at ? $article->created_at->format('F j, Y, g:i a') : 'N/A' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
