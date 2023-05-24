<x-layout>
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
        <div class="row">
            <x-card />
        </div>
    </main>
</x-layout>
