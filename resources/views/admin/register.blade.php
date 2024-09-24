<x-admin-app-layout>

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Create User Accounts</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create User Accounts</li>
            </ol>

            <div class="row">
                <div class="col-12 col-md-8">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create A New User Account</h3>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('admin.register.store') }}">
                                @csrf

                                @if (session('status'))
                                    <!-- Session Status -->
                                    <x-form.auth-session-status class="mb-4" status="{{ session('status') }}" />
                                @endif

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="name" type="text" />
                                </div>

                                <div class="form-floating mb-3">
                                    <x-form.input-required name="email" type="email" />
                                </div>

                                <div class="form-input mb-3">
                                    <select class="form-select py-3" name="role" aria-label="role" required>
                                        <option value="">Select the role of the user</option>
                                        <option value="1">Worker</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Manager</option>
                                        <option value="4">Admin</option>
                                    </select>

                                    <x-form.error name="role" />
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <x-form.input-required name="password" type="password" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="password_confirmation" type="password"
                                                placeholder="Confirm password" name="password_confirmation" />
                                            <label for="password_confirmation">Confirm Password</label>
                                            <x-form.error name="password_confirmation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-block" type="submit">
                                            Create
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>

</x-admin-app-layout>
