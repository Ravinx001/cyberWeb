<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #1a1a1a; border: 1px solid #333;">
                        <div class="card-header" style="background-color: #1a1a1a; border-bottom: 1px solid #333;">
                            <h3 class="text-center font-weight-light my-3" style="color: #0bf5ea;">Verify Email</h3>
                            <div class="mb-3" style="color: #ffffff;">Thanks for signing up! Before getting started, could you
                                verify your email address by clicking on the link we just emailed to you? If you didn't
                                receive the email, we will gladly send you another.</div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-3" style="color: #0bf5ea;">A new verification link has been sent to the email
                                    address you provided during registration.</div>
                            @endif
                        </div>
                        <div class="card-body" style="background-color: #1a1a1a; color: #ffffff;">

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                    <button class="btn" type="submit" style="background-color: #0bf5ea; color: #000000; border: none;">Resend Verification Email</button>
                                </div>

                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                    <button class="btn" type="submit" style="background-color: #555; color: #ffffff; border: none;">Log Out</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>
