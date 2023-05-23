<x-layout title="Customer Support">
    <main class="container-fluid">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="col-12 mt-5">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            <div class="col-12 col-md-8 my-5">
                <form method="POST" action="{{ route('sendMail') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="InputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="InputUsername" name="user">
                    </div>
                    <div class="mb-3">
                        <label for="TextBody" class="form-label">Enter your message</label>
                        <textarea name="body" id="TextBody" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-warning">Submit</button>
                </form>
            </div>
        </div>
    </main>
</x-layout>
