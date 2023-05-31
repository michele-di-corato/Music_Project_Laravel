<x-layout title="{{ $song->title }} - {{ $song->author }} " heading="Song details">
    <main class="container-fluid vh-100">
        <div class="row">
            <div class="col-10 col-md-3">{{ $song->title }}</div>
            <div class="col-10 col-md-3">{{ $song->author }}</div>
            <div class="col-10 col-md-3">{{ $song->date }}</div>
        </div>
    </main>
</x-layout>
