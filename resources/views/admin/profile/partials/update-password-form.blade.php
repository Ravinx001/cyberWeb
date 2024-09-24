            {{-- Update Password --}}
            <div class="row">
                <div class="col-12 col-md-8">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="text-start font-weight-light my-2">Update Password</h5>
                            <span class="text-primary">Ensure your account is using a long, random password to stay
                                secure.</span>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')

                                @if (session('status') === 'password-updated')
                                    <!-- Session Status -->
                                    <x-form.auth-session-status class="mb-4" status='Saved' />
                                @endif

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="update_password_current_password" type="password"
                                        placeholder="Current password" name="current_password" required />
                                    <label for="update_password_current_password">Current Password</label>
                                    <div class="text-danger">
                                        {{ $errors->updatePassword->has('current_password') ? $errors->updatePassword->first('current_password') : '' }}
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="update_password_password" type="password"
                                        placeholder="New password" name="password" required />
                                    <label for="update_password_password">New Password</label>
                                    <div class="text-danger">
                                        {{ $errors->updatePassword->has('password') ? $errors->updatePassword->first('password') : '' }}
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="update_password_password_confirmation"
                                        type="password" placeholder="Confirm New password" name="password_confirmation"
                                        required />
                                    <label for="update_password_password_confirmation">Confirm New Password</label>
                                    <div class="text-danger">
                                        {{ $errors->updatePassword->has('password_confirmation') ? $errors->updatePassword->first('password_confirmation') : '' }}
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
