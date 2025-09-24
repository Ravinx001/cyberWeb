<x-user-app-layout>
    <main class="container pt-5 pb-5 mb-5" style="background-color: #000000; color: #ffffff; min-height: 80vh;">

        <div class="row">
            <div class="col">
                <div class="progress" role="progressbar" aria-label="Quiz Progress" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100" style="background-color: #2a2a2a;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated text-dark"
                        style="width: 100%; background-color: #0bf5ea;">100% Completed</div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <h2 style="color: #0bf5ea;">Quiz Completed!</h2>

            <div class="mt-4">
                <h4 style="color: #ffffff;">Your Results:</h4>
                <div class="mt-3">
                    <span style="font-size: 2rem; color: #0bf5ea; font-weight: bold;">
                        {{ $total_correct }}/{{ $total_questions }}
                    </span>
                    <br>
                    <span style="color: #cccccc;">Correct Answers</span>
                </div>
            </div>

            @if($total_correct == $total_questions)
                <div class="mt-4">
                    <div class="alert" style="background-color: #1a5f1a; border-color: #0bf5ea; color: #0bf5ea;">
                        <h5>🎉 Excellent! You answered all questions correctly!</h5>
                        <p>You have successfully completed the cybersecurity quiz with a perfect score.</p>
                    </div>
                </div>
            @else
                <div class="mt-4">
                    <div class="alert" style="background-color: #5f1a1a; border-color: #f5a60b; color: #f5a60b;">
                        <h5>⚠️ Quiz Completed with Some Incorrect Answers</h5>
                        <p>We recommend retaking the quiz to improve your cybersecurity knowledge and achieve a perfect score.</p>
                    </div>
                </div>
            @endif

            <div class="mt-5">
                <a href="{{ route('home') }}" class="btn me-3" style="background-color: #0bf5ea; color: #000000; border: none;">
                    Go to Home
                </a>
                <a href="{{ route('quiz.delete') }}" class="btn" style="background-color: #2a2a2a; color: #ffffff; border: 1px solid #0bf5ea;">
                    Retake Quiz
                </a>
            </div>
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
                            ❌ Incorrect Answer for Final Question
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
                            You've completed the quiz! You can retake it to improve your score.
                        </p>
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid #333;">
                        <button type="button" class="btn" style="background-color: #0bf5ea; color: #000000;"
                                data-bs-dismiss="modal" onclick="hideModal()">
                            View Results
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

</x-user-app-layout>
