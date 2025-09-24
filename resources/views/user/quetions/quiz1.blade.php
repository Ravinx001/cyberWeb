<x-user-app-layout>

    <main class="container pt-5 pb-5 mb-5" style="background-color: #000000; color: #ffffff; min-height: 80vh;">

        <div class="row">
            <div class="col">
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100" style="background-color: #2a2a2a;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated text-dark"
                        style="width: 0%; background-color: #0bf5ea;">0% Completed</div>
                </div>
            </div>
        </div>

        <div>
            <center>
                <h3 class="mt-5" style="color: #0bf5ea;">Question 1</h3>
            </center>
            <br>
            <br>

            <form method="post" action="{{ route('quiz.store') }}">
                {{-- Question --}}
                <div class="row">
                    <div class="col-12">

                        <div class="card mb-4" style="background-color: #1a1a1a; border: 1px solid #333;">

                            <div class="card-header text-center" style="background-color: #1a1a1a; border-bottom: 1px solid #333;">
                                <h5 class="my-2" style="color: #ffffff;">Which of the following is a core principle of Role-Based Access Control (RBAC) in the EISP ?</h5>
                            </div>

                            <div class="card-body" style="background-color: #1a1a1a; color: #ffffff;">
                                @csrf

                                <input type="hidden" name="question" value="1">

                                <div class="row fs-5">
                                    <div class="col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="1" name="answer"
                                                id="flexRadioDefault1" {{ old('answer') == '1' ? 'checked' : '' }} style="background-color: #2a2a2a; border: 1px solid #555;">
                                            <label class="form-check-label" for="flexRadioDefault1" style="color: #ffffff;">
                                                a) Granting access to everyone based on their job title.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="2" name="answer"
                                                id="flexRadioDefault2" {{ old('answer') == '2' ? 'checked' : '' }} style="background-color: #2a2a2a; border: 1px solid #555;">
                                            <label class="form-check-label" for="flexRadioDefault2" style="color: #ffffff;">
                                                b) Assigning permissions based on specific job functions.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="3" name="answer"
                                                id="flexRadioDefault3" {{ old('answer') == '3' ? 'checked' : '' }} style="background-color: #2a2a2a; border: 1px solid #555;">
                                            <label class="form-check-label" for="flexRadioDefault3" style="color: #ffffff;">
                                                c) Allowing users to request access to any system they need.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="4" name="answer"
                                                id="flexRadioDefault4" {{ old('answer') == '4' ? 'checked' : '' }} style="background-color: #2a2a2a; border: 1px solid #555;">
                                            <label class="form-check-label" for="flexRadioDefault4" style="color: #ffffff;">
                                                d) Automatically granting access to all company resources.
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
                        <button style="background-color: #0bf5ea; color: #000000; border: none;" class="btn"
                            type="submit">Next</button>
                    </div>
                </center>

            </form>

        </div>
    </main>

    <!-- Answer Review Modal -->
    @if(isset($is_correct) && !$is_correct)
        <div class="modal fade show" id="answerModal" tabindex="-1" style="display: block; background: rgba(0,0,0,0.8);"
             aria-labelledby="answerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #1a1a1a; border: 1px solid #333;">
                    <div class="modal-header" style="border-bottom: 1px solid #333;">
                        <h5 class="modal-title" id="answerModalLabel" style="color: #f5a60b;">
                            ❌ Incorrect Answer
                        </h5>
                    </div>
                    <div class="modal-body" style="color: #ffffff;">
                        <p><strong>Your Answer:</strong>
                            <span style="color: #ff6b6b;">Option {{ $user_answer }}</span>
                        </p>
                        <p><strong>Correct Answer:</strong>
                            <span style="color: #51cf66;">Option {{ $correct_answer }}</span>
                        </p>
                        <p style="color: #cccccc; font-size: 0.9rem; margin-top: 15px;">
                            Don't worry! You can continue with the next question and retake the quiz later to improve your score.
                        </p>
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid #333;">
                        <button type="button" class="btn" style="background-color: #0bf5ea; color: #000000;"
                                data-bs-dismiss="modal" onclick="hideModal()">
                            Continue to Next Question
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function hideModal() {
                document.getElementById('answerModal').style.display = 'none';
            }
        </script>
    @endif

    @if(isset($is_correct) && $is_correct)
        <script>
            // Show a brief success indicator for correct answers
            window.onload = function() {
                const successDiv = document.createElement('div');
                successDiv.innerHTML = '<div class="alert alert-success" style="position: fixed; top: 20px; right: 20px; z-index: 1000; background-color: #1a5f1a; border-color: #51cf66; color: #51cf66;">✅ Correct Answer!</div>';
                document.body.appendChild(successDiv);
                setTimeout(() => {
                    successDiv.remove();
                }, 2000);
            }
        </script>
    @endif

</x-user-app-layout>
