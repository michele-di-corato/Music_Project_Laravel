<x-layout>
    @if (session('status'))
        <div class="col-12 mt-5">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif
</x-layout>
