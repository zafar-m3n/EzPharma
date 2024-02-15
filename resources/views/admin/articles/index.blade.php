@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Articles</h2>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        @if ($article->image)
                            <img src="{{ asset('images/' . $article->image) }}" class="card-img-top"
                                alt="{{ $article->title }}">
                        @endif
                        <div class="card-body d-flex flex-column justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->summary }}</p>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('admin.articles.show', $article->id) }}"
                                    class="btn btn-secondary me-2">View</a>
                                <a href="#" class="btn btn-primary me-2">Edit</a>
                                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
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
