<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-xxl">
        <a class="navbar-brand" href="/dashboard">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Logonetflix.png" alt="Netflix Logo" style="height: 30px; width: auto;">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex ms-2">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/tvshows">TV Shows</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/movies">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/logs">Requests</a>
            </li>
        </ul>
        <div style="position: relative;">
            <a class="nav-link dropdown-toggle fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        {{ csrf_field() }}
                        <button type="submit" class="text-start" style="background-color: white; border: none; width: 100%;">Logout</button>
                    </form>
                </li>

            </ul>
        </div>

        </div>
    </div>
</nav>

