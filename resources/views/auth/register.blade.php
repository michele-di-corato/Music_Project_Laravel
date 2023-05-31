<x-layout title="Register new user" heading="Register a new user">
    <main class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="InputUserName" class="form-label">Enter your name</label>
                        <input type="text" class="form-control" id="InputUserName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Enter your e-mail address</label>
                        <input type="email" class="form-control" id="InputEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Enter your password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="ConfirmPassword" class="form-label">Confirm your password</label>
                        <input type="password" class="form-control" id="ConfirmPassword" name="password_confirmation">
                    </div>
                    <x-button />
                </form>
            </div>
        </div>
    </main>
</x-layout>
