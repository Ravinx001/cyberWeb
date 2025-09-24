<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #1a1a1a; border: 1px solid #333;">

                        <div class="card-header" style="background-color: #1a1a1a; border-bottom: 1px solid #333;">
                            <h3 style="color: #0bf5ea;" class="text-center font-weight-light my-4">Login</h3>

                            <!-- Session Status -->
                            <x-form.auth-session-status class="mb-4" :status="session('status')" />
                        </div>

                        <div class="card-body" style="background-color: #1a1a1a; color: #ffffff;">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="email" type="email" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                </div>

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="password" type="password" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" id="remember_me" type="checkbox" name="remember" style="background-color: #2a2a2a; border: 1px solid #555;" />
                                    <label class="form-check-label" for="remember_me" style="color: #ffffff;">Remember
                                        Password</label>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}" style="color: #0bf5ea;"><span
                                                class="fs-6">Forgot
                                                Password?</span></a>
                                    @endif
                                    <button style="background-color: #0bf5ea; color: #000000; border: none;"
                                        class="btn fw-bold fs-6" type="submit">Login</button>
                                </div>

                                <div class="text-center mt-5">
                                    <p style="color: #ffffff;">Don't have an account ?
                                        <a class="small" href="{{ route('register.create') }}" style="color: #0bf5ea;"><span
                                                class="fs-6">Sign Up</span></a>
                                    </p>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>
