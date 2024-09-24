<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">

                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Login</h3>

                            <!-- Session Status -->
                            <x-form.auth-session-status class="mb-4" :status="session('status')" />
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="email" type="email" />
                                </div>

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="password" type="password" />
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" id="remember_me" type="checkbox" name="remember" />
                                    <label class="form-check-label" for="remember_me">Remember
                                        Password</label>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">Forgot
                                            Password?</a>
                                    @endif
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>
