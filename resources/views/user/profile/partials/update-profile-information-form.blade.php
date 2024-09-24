            {{-- Update Name and Email --}}
            <div class="row">
                <div class="col-12 col-md-8">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="text-start font-weight-light my-2">Profile Information</h5>
                            <span class="text-primary">Update your account's profile information and email
                                address.</span>

                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{ route('user.profile.update') }}">
                                @csrf
                                @method('patch')

                                @if (session('status') === 'profile-updated')
                                    <!-- Session Status -->
                                    <x-form.auth-session-status class="mb-4" status='Saved' />
                                @endif

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                    <div class="my-2">
                                        <span class="text-danger mb-3">
                                            {{ __('Your email address is unverified.') }}
                                        </span>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button form="send-verification" class="btn btn-primary">Click here to
                                                re-send the verification email.</button>
                                        </div>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <!-- Session Status -->
                                            <x-form.auth-session-status class="mb-4"
                                                status='A new verification link has been sent to your email address' />
                                        @endif
                                    </div>
                                @endif

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="name" type="text" :value="old('name', $user->name)" />
                                </div>

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="email" type="email" :value="old('email', $user->email)" />
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
