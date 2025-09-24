            {{-- Update Password --}}
            <div class="row">
                <div class="col-12">

                    <div class="card mb-4" style="background-color: #1a1a1a; border: 1px solid #333;">
                        <div class="card-header" style="background-color: #1a1a1a; border-bottom: 1px solid #333;">
                            <h5 class="text-start font-weight-light my-2" style="color: #0bf5ea;">Update Password</h5>
                            <span style="color: #ffffff;">Ensure your account is using a long, random password to stay
                                secure.</span>
                        </div>

                        <div class="card-body" style="background-color: #1a1a1a; color: #ffffff;">

                            <form method="post" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')

                                @if (session('status') === 'password-updated')
                                    <!-- Session Status -->
                                    <x-form.auth-session-status class="mb-4" status='Saved' />
                                @endif

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="update_password_current_password" type="password"
                                        placeholder="Current password" name="current_password" required style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                    <label for="update_password_current_password" style="color: #999;">Current Password</label>
                                    <div class="text-danger">
                                        {{ $errors->updatePassword->has('current_password') ? $errors->updatePassword->first('current_password') : '' }}
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="update_password_password" type="password"
                                        placeholder="New password" name="password" required style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                    <label for="update_password_password" style="color: #999;">New Password</label>
                                    <div class="text-danger">
                                        {{ $errors->updatePassword->has('password') ? $errors->updatePassword->first('password') : '' }}
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="update_password_password_confirmation"
                                        type="password" placeholder="Confirm New password" name="password_confirmation"
                                        required style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #555;" />
                                    <label for="update_password_password_confirmation" style="color: #999;">Confirm New Password</label>
                                    <div class="text-danger">
                                        {{ $errors->updatePassword->has('password_confirmation') ? $errors->updatePassword->first('password_confirmation') : '' }}
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button style="background-color: #0bf5ea; color: #000000; border: none;" class="btn" type="submit">Save</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
