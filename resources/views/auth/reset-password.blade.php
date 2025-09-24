<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #1a1a1a; border: 1px solid #333;">
                        <div class="card-header" style="background-color: #1a1a1a; border-bottom: 1px solid #333;">
                            <h3 class="text-center font-weight-light my-3" style="color: #0bf5ea;">Reset Password</h3>

                            <!-- Session Status -->
                            <x-form.auth-session-status class="mb-4" :status="session('status')" />
                        </div>
                        <div class="card-body" style="background-color: #1a1a1a; color: #ffffff;">

                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="Email"
                                        name="email" value="{{ old('email') ? old('email') : $request->email }}"
                                        required style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                    <label for="update_password_current_password" style="color: #999;">Email</label>
                                    <div class="text-danger">
                                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" type="password" placeholder="Password"
                                        name="password" required style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                    <label for="password" style="color: #999;">Password</label>
                                    <div class="text-danger">
                                        {{ $errors->has('password') ? $errors->first('password') : '' }}
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password_confirmation" type="password"
                                        placeholder="Confirm Password" name="password_confirmation" required style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                    <label for="password_confirmation" style="color: #999;">Confirm Password</label>
                                    <div class="text-danger">
                                        {{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="{{ route('login') }}" style="color: #0bf5ea;">Return to login</a>

                                    <button class="btn" type="submit" style="background-color: #0bf5ea; color: #000000; border: none;">Reset Password</button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>
