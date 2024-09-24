<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-3">Forgot Password ?</h3>
                            <div class="small mb-3 text-primary">No problem. Just let us know your email address and we
                                will email you a password reset link that will allow you to choose a new one.</div>

                            <!-- Session Status -->
                            <x-form.auth-session-status class="mb-4" :status="session('status')" />
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="email" type="email" />
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="{{ route('login') }}">Return to login</a>

                                    <button class="btn btn-primary" type="submit">Reset Password</button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>
