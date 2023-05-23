<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="fa-solid fa-radio fa-lg"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('upload') }}">Upload a song</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('library') }}">Songs library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">Support</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
