<x-guest-layout>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #1a1a1a; border: 1px solid #333;">
                        <div class="card-header" style="background-color: #1a1a1a; border-bottom: 1px solid #333;">
                            <h3 class="text-center font-weight-light my-3" style="color: #0bf5ea;">Confirm Password</h3>
                            <div class="small mb-3" style="color: #ffffff;">
                                This is a secure area of the application. Please confirm your password before continuing.
                            </div>
                        </div>
                        <div class="card-body" style="background-color: #1a1a1a; color: #ffffff;">

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" type="password" placeholder="Password"
                                        name="password" required autocomplete="current-password" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                    <label for="password" style="color: #999;">Password</label>
                                    @error('password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-end mt-4 mb-0">
                                    <button class="btn" type="submit" style="background-color: #0bf5ea; color: #000000; border: none;">
                                        Confirm
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
