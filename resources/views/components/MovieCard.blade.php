<a href="{{ route('movies.edit', $movie->id) }}" class="movie-link">
    <div class="movie-card card p-4 bg-light shadow">
        <div class="cursor-pointer flex flex-1">
            <img src="{{ $movie->movie_pic_url }}" alt="Movie Picture" class="aspect-square w-100 object-cover mb-3 ms-3 p-5 border border">
            <div class="ml-4 flex-1">
                <div class="mb-2"><b>{{ $movie->title }}</b></div>
                <div><b>Genres:</b> {{ $movie->genres }}</div>
            </div>
        </div>
    </div>
</a>

<style>
    .movie-link {
        text-decoration: none !important;
        color: inherit !important;
    }

    .movie-card {
        border-radius: 5px;
        width: 18rem;
        height: 300px;
    }
</style>
