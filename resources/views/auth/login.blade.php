<x-layout title="Login user" heading="Login user">
    <main class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Enter your e-mail address</label>
                        <input type="email" class="form-control" id="InputEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Enter your password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password">
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <x-button />
                        <p class="m-2">New user? <a href="{{ route('register') }}">Register now!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>
