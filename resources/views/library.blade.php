<x-layout title="Library" heading="Songs library">
    <main class="container-fluid">
        <div class="row w-100">
            @if (session('status'))
                <div class="col-12 mt-5">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
        </div>
        <div class="row justify-content-evenly">
            @foreach ($songs as $song)
                <div class="card m-3 col-10 col-md-3">
                    <div class="row g-0">
                        <div class="col-3">
                            <img src="{{ Storage::url($song->cover) }}" class="img-fluid rounded my-4" alt="Song cover">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="mb-2">{{ $song->title }}</h5>
                                <h5 class="mb-4">{{ $song->artist }}</h5>
                                <div class="d-flex flex-row justify-content-around">
                                    <a href="{{ route('songDetails', $song->id) }}" class="gen-button">Check the
                                        song</a>
                                    @if (Auth::id() == $song->user_id && Auth::check())
                                        <a href="{{ route('editSong', compact('song')) }}" class="gen-button">Edit</a>
                                        <form action="{{ route('deleteSong', compact('song')) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('delete')
                                            <button class="gen-button" type="submit">Delete</button>
                                        </form>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</x-layout>
