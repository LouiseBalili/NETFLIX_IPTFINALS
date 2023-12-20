@extends('base')

@section('content')
    @if(session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success me-2" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>
        <div>
            {{ session('success') }}
        </div>
    </div>
    @endif
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">New Releases</h2>
        <div>
        <a href="/movies/request" class="btn btn-secondary btn-sm px-4 py-2">Request Movies</a>
        <a href="/movies/create" class="btn btn-danger btn-sm px-4 py-2">Add Movies</a>
        </div>
    </div>
    <hr class="mt-2 mb-0">

    <div class="py-12">
        <div class="container mt-3">
            <div class="row">
                @foreach($movies as $movie)
                    <div class="col-md-3 mb-4">
                        @include('components.MovieCard', ['movie' => $movie])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

