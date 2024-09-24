<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-3">Verify Email</h3>
                            <div class="mb-3 text-primary">Thanks for signing up! Before getting started, could you
                                verify your email address by clicking on the link we just emailed to you? If you didn't
                                receive the email, we will gladly send you another.</div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-3 text-success">A new verification link has been sent to the email
                                    address you provided during registration.</div>
                            @endif
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Resend Verification Email</button>
                                </div>

                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                    <button class="btn btn-secondary" type="submit">Log Out</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>
