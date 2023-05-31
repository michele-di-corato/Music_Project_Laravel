<x-layout title="{{ $song->title }} - {{ $song->artist }} " heading="Song details">
    <main class="container-fluid vh-100">
        <div class="row">
            <div class="col-10 col-md-3">Title: {{ $song->title }}</div>
            <div class="col-10 col-md-3">Artist: {{ $song->artist }}</div>
            <div class="col-10 col-md-3">Release date: {{ $song->date }}</div>
            <div class="col-10 col-md-3">Added by: {{ $song->user->name }}</div>
        </div>
    </main>
</x-layout>
