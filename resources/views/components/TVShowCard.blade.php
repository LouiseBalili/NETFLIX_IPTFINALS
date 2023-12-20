<a href="{{ route('tvshows.edit', $tvshow->id) }}" class="tvshow-link">
    <div class="tvshow-card card p-4 bg-light shadow">
        <div class="cursor-pointer flex flex-1">
            <img src="{{ $tvshow->tv_show_pic_url }}" alt="TV Show Pic" class="aspect-square w-100 object-cover mb-3 ms-3 p-5 border border">
            <div class="ml-4 flex-1">
                <div class="mb-2"><b>{{ $tvshow->title }}</b></div>
                <div><b>Genres:</b> {{ $tvshow->genres }}</div>
            </div>
        </div>
    </div>
</a>

<style>
    .tvshow-link {
        text-decoration: none !important;
        color: inherit !important;
    }

    .tvshow-card {
        border-radius: 5px;
        width: 18rem;
        height: 300px;
    }
</style>
