<x-layout title="Upload a song">
    <main class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 my-5">
                <form method="POST" action="{{ route('saveSong') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="InputTitle" class="form-label">Song Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="InputTitle"
                            name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="InputAuthor" class="form-label">Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror"
                            id="InputAuthor" name="author" value="{{ old('author') }}">
                        @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="InputDate" class="form-label">Release date</label>
                        <input type="number" class="form-control @error('date') is-invalid @enderror" id="InputDate"
                            name="date" value="{{ old('date') }}">
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="InputCover" class="form-label">Song Cover</label>
                        <input type="file" class="form-control @error('cover') is-invalid @enderror" id="InputCover"
                            name="cover" value="{{ old('cover') }}">
                        @error('cover')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <x-button />
                </form>
            </div>
        </div>
    </main>
</x-layout>
