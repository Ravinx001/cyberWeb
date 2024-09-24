<x-guest-layout>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 mt-5 pt-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">

                        <div class="card-header">
                            <h3 class="text-center fs-3 fw-bold my-2">Go to Login</h3>
                        </div>

                        <div class="card-body d-flex justify-content-center py-5">

                            <a href="{{ route('login') }}">
                                <button type="button" class="btn btn-primary fs-5 fw-bold">Login</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</x-guest-layout>
