<x-user-app-layout>

    <main class="container pt-5 pb-5 mb-5" style="background-color: #000000; color: white;"

        <div class="row">
            <div class="col">
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated text-dark"
                        style="width: 80%; background-color: #0bf5ea;">80% Completed</div>
                </div>
            </div>
        </div>

        <div>
            <center>
                <h3 class="mt-5">Question 9</h3>
            </center>
            <br>
            <br>

            <form method="post" action="{{ route('quiz.store') }}">
                {{-- Question --}}
                <div class="row">
                    <div class="col-12">

                        <div class="card mb-4" style="background-color: #1a1a1a; border-color: #333;">

                            <div class="card-header text-center" style="background-color: #2a2a2a; border-bottom-color: #333; color: white;">
                                <h5 class="my-2">According to the WFH policy in the SYSSP, which option is the MOST secure way to connect to the company network remotely ?</h5>
                            </div>

                            <div class="card-body" style="background-color: #1a1a1a; color: white;">
                                @csrf

                                <input type="hidden" name="question" value="9">

                                <div class="row fs-5" style="color: #999;">
                                    <div class="col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="1" name="answer"
                                                id="flexRadioDefault1" {{ old('answer') == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                a) Using a web browser directly
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="2" name="answer"
                                                id="flexRadioDefault2" {{ old('answer') == '2' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                b) Connecting through a public Wi-Fi network
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="3" name="answer"
                                                id="flexRadioDefault3" {{ old('answer') == '3' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                c) Using a VPN (Virtual Private Network)
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4 col-9 offset-3 d-flex justify-content-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="4" name="answer"
                                                id="flexRadioDefault4" {{ old('answer') == '4' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                d) Accessing work files through a personal cloud storage service
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
                        <button style="background-color: #0bf5ea; color: #000000;" class="btn text-white"
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
