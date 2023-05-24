<div class="card my-3 col-10 col-md-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-4">
            <img src="{{ $cover }}" class="img-fluid rounded-start mt-2" alt="Song cover">
        </div>
        <div class="col-8">
            <div class="card-body">
                <h5 class="mb-2">{{ $title }}</h5>
                <h5 class="mb-2">{{ $author }}</h5>
                <h5 class="mb-3">{{ $date }}</h5>
                <a href="{{ $link }}" class="gen-button">Listen to the song</a>
            </div>
        </div>
    </div>
</div>
