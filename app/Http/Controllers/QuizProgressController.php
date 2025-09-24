<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizProgressRequest;
use App\Http\Requests\UpdateQuizProgressRequest;
use App\Models\QuizProgress;
use App\Models\Questions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class QuizProgressController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();

        $ques = 0;

        $status = DB::table('quiz_progress')
            ->where('user_id', '=', $user->id)
            ->latest()
            ->first();

        try {
            $ques = $status->questionProgress;
        } catch (\Throwable $th) {
            //throw $th;
        }

        if ($ques == 0) {
            return view('user.quetions.quiz1');
        } else if ($ques < 10) {

            $nextQues = $ques + 1;
            $view = "user.quetions.quiz{$nextQues}";

            // Check if user already answered the next question to prevent re-answering
            $quizProgress = QuizProgress::where('user_id', $user->id)->latest()->first();
            $answeredQuestions = $quizProgress ? ($quizProgress->answered_questions ?? []) : [];

            // If next question was already answered, redirect to home (shouldn't happen in normal flow)
            if (isset($answeredQuestions[$nextQues])) {
                return redirect(route('home'))->with('info', 'You have already completed this quiz!');
            }

            return view($view);
        } else {
            return redirect(route('home'))->with('success', 'You Already Completed the Quiz !');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizProgressRequest $request)
    {
        $question = (int) $request->question;
        $answer = $request->answer;
        $user = Auth::user();

        // Get the correct answer for this question
        $correctAnswerRecord = Questions::where('question', $question)->first();
        $correctAnswer = $correctAnswerRecord ? $correctAnswerRecord->answer : null;
        $isCorrect = $correctAnswerRecord && $correctAnswerRecord->answer == $answer;

        // Get or create quiz progress record
        $quizProgress = QuizProgress::where('user_id', $user->id)->latest()->first();

        if (!$quizProgress) {
            // First question
            $answeredQuestions = [];
            $correctAnswersCount = 0;
        } else {
            $answeredQuestions = $quizProgress->answered_questions ?? [];
            $correctAnswersCount = $quizProgress->correct_answers ?? 0;
        }

        // Update answered questions tracking
        $answeredQuestions[$question] = [
            'user_answer' => $answer,
            'correct_answer' => $correctAnswer,
            'is_correct' => $isCorrect,
            'answered_at' => now()->toISOString()
        ];

        // Update correct answers count
        if ($isCorrect) {
            $correctAnswersCount++;
        }

        // Update or create quiz progress
        if (!$quizProgress) {
            $quizProgress = QuizProgress::create([
                'user_id' => $user->id,
                'questionProgress' => $question,
                'correct_answers' => $correctAnswersCount,
                'answered_questions' => $answeredQuestions,
            ]);
        } else {
            $quizProgress->update([
                'questionProgress' => $question,
                'correct_answers' => $correctAnswersCount,
                'answered_questions' => $answeredQuestions,
            ]);
        }

        // Prepare response data for the view
        $responseData = [
            'is_correct' => $isCorrect,
            'user_answer' => $answer,
            'correct_answer' => $correctAnswer,
            'question_number' => $question,
            'total_questions' => 10
        ];

        if ($question >= 10) {
            // Quiz completed
            $responseData['quiz_completed'] = true;
            $responseData['total_correct'] = $correctAnswersCount;
            return view('user.quiz-result', $responseData);
        } else {
            // Continue to next question
            $nextQuestion = $question + 1;
            $view = "user.quetions.quiz{$nextQuestion}";
            return view($view, $responseData);
        }
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(QuizProgress $quizProgress)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(QuizProgress $quizProgress)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateQuizProgressRequest $request, QuizProgress $quizProgress)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $user = Auth::user();

        DB::table('quiz_progress')->where('user_id', '=', $user->id)->delete();

        return redirect()->route('quiz.create');
    }
}
