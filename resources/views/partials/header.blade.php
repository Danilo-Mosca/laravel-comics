<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary height-menu">
        <div class="container height-menu">
            <a class="navbar-brand" href="#">
                {{-- Con l'istruzione di seguito per accedere all'immagine da inserire nel layout, affinché Blade la processi, utilizzo la direttiva
         Vite::asset() come di seguito (notiamo come asset sia un metodo statico): --}}
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Laravel Comics" width="50"
                    height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end height-nav-menu" id="navbarNav">
                <ul class="navbar-nav height-nav-menu">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('single-page') }}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
