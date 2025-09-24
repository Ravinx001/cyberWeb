<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #1a1a1a; border: 1px solid #333;">

                        <div class="card-header" style="background-color: #1a1a1a; border-bottom: 1px solid #333;">
                            <h3 style="color: #0bf5ea;" class="text-center font-weight-light my-4">Sign Up</h3>

                            <!-- Session Status -->
                            <x-form.auth-session-status class="mb-4" :status="session('status')" />
                        </div>

                        <div class="card-body" style="background-color: #1a1a1a; color: #ffffff;">

                            <form method="POST" action="{{ route('register.store') }}">
                                @csrf

                                @if (session('status'))
                                    <!-- Session Status -->
                                    <x-form.auth-session-status class="mb-4" status="{{ session('status') }}" />
                                @endif

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="name" type="text" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                </div>

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="email" type="email" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <x-form.input-required name="password" type="password" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="password_confirmation" type="password"
                                                placeholder="Confirm password" name="password_confirmation" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                            <label for="password_confirmation" style="color: #999;">Confirm Password</label>
                                            <x-form.error name="password_confirmation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button style="background-color: #0bf5ea; color: #000000; border: none;" class="btn btn-block fs-6 fw-bold" type="submit">
                                            Create
                                        </button>
                                    </div>
                                </div>

                                <div class="text-center mt-5">
                                    <p style="color: #ffffff;">Already have an account ?
                                        <a class="fs-6" href="{{ route('login') }}" style="color: #0bf5ea;">Login</a>
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
