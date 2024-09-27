<x-user-app-layout>

    <main class="container pt-5 pb-5 mb-5">

        <div class="row">
            <div class="col">
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info text-dark"
                        style="width: 70%">70% Completed</div>
                </div>
            </div>
        </div>

        <div>
            <center>
                <h3 class="mt-5">Question 8</h3>
            </center>
            <br>
            <br>

            <form method="post" action="{{ route('quiz.store') }}">
                {{-- Question --}}
                <div class="row">
                    <div class="col-12">

                        <div class="card mb-4">

                            <div class="card-header text-center">
                                <h5 class="my-2">Which of the following is NOT a requirement for BYOD devices
                                    according to the SYSSP ?</h5>
                            </div>

                            <div class="card-body">
                                @csrf

                                <input type="hidden" name="question" value="8">

                                <div class="row fs-5 text-muted">
                                    <div class="col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="1" name="answer"
                                                id="flexRadioDefault1" {{ old('answer') == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                a) Updating the operating system to the latest version
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="2" name="answer"
                                                id="flexRadioDefault2" {{ old('answer') == '2' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                b) Setting a screen timeout of 1 minute
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="3" name="answer"
                                                id="flexRadioDefault3" {{ old('answer') == '3' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                c) Enabling SSH sessions to stay active indefinitely
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="4" name="answer"
                                                id="flexRadioDefault4" {{ old('answer') == '4' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                d) Creating a separate user account for work purposes
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <center>
                    <div class="mt-5">
                        <button style="background-color: rgb(0,156,234);" class="btn text-white"
                            type="submit">Next</button>
                    </div>
                </center>

            </form>

        </div>
    </main>

</x-user-app-layout>
