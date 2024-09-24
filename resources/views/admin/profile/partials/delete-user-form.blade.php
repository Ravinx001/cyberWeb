            {{-- Delete Account --}}
            <div class="row">
                <div class="col-12 col-md-8">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="text-start font-weight-light my-2">Delete Account</h5>
                            <span class="text-primary">Once your account is deleted, all of its resources and data will
                                be permanently deleted. Before deleting your account, please download any data or
                                information that you wish to retain.</span>

                            <div class="text-danger">
                                {{ $errors->userDeletion->has('password') ? $errors->userDeletion->first('password') : '' }}
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteForm" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to
                                            delete your account ?
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="{{ route('admin.profile.destroy') }}">
                                        @csrf
                                        @method('delete')

                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <span class="text-primary">Once your account is deleted, all of its
                                                    resources and data will be permanently deleted. Please enter your
                                                    password to confirm you would like to permanently delete your
                                                    account.'</span>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" type="password"
                                                    placeholder="Password" name="password" required />
                                                <label for="password">Password</label>
                                                <div class="text-danger">
                                                    {{ $errors->userDeletion->has('password') ? $errors->userDeletion->first('password') : '' }}
                                                </div>
                                            </div>

                                        </div>

                                        <div class="modal-footer d-flex justify-content-between">
                                            <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                                                aria-label="Close">Cancel</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteForm">
                                Delete Account
                            </button>

                        </div>

                    </div>

                </div>
            </div>
