<x-layout title="Music Library">
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
                <x-card title="{{ $song->title }}" author="{{ $song->author }}" date="{{ $song->date }}"
                    link="{{ route('songDetails', $song->id) }}" cover="{{ $song->cover }}" />
            @endforeach
        </div>
    </main>
</x-layout>
