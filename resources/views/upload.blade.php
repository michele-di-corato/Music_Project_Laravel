<x-layout title="Upload a song">
    <main class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 my-5">
                <form method="POST" action="{{ route('saveSong') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="InputTitle" class="form-label">Song Title</label>
                        <input type="text" class="form-control" id="InputTitle" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="InputAuthor" class="form-label">Author</label>
                        <input type="text" class="form-control" id="InputAuthor" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="InputDate" class="form-label">Release date</label>
                        <input type="number" class="form-control" id="InputDate" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="InputCover" class="form-label">Song Cover</label>
                        <input type="file" class="form-control" id="InputCover" name="cover">
                    </div>
                    <x-button />
                </form>
            </div>
        </div>
    </main>
</x-layout>
