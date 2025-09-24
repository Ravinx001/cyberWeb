<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user != null) {

            $ques = 0;
            $correctAnswers = 0;
            $totalQuestions = 10;

            $status = DB::table('quiz_progress')
                ->where('user_id', '=', $user->id)
                ->latest()
                ->first();

            try {
                $ques = $status->questionProgress;
                $correctAnswers = $status->correct_answers ?? 0;
            } catch (\Throwable $th) {
                //throw $th;
            }

            if ($ques >= 10) {
                // Quiz completed
                $quizRoute = "quiz.delete";
                $text = "Retake the Quiz";

                if ($correctAnswers == $totalQuestions) {
                    $quizStatus = "completed_perfect";
                    $quizMessage = "Perfect! You answered all questions correctly.";
                } else {
                    $quizStatus = "completed_imperfect";
                    $quizMessage = "You got {$correctAnswers} out of {$totalQuestions} questions correct. We recommend retaking the quiz to improve your score.";
                }

                return view('welcome', compact('quizRoute', 'text', 'quizStatus', 'quizMessage', 'correctAnswers', 'totalQuestions'));
            } else {
                // Quiz in progress or not started
                $quizRoute = "quiz.create";

                if ($ques > 0) {
                    $text = "Continue Quiz";
                    $quizStatus = "in_progress";
                    $quizMessage = "Continue where you left off (Question " . ($ques + 1) . ")";
                } else {
                    $text = "Start Quiz";
                    $quizStatus = "not_started";
                    $quizMessage = "Start the cybersecurity quiz";
                }

                return view('welcome', compact('quizRoute', 'text', 'quizStatus', 'quizMessage', 'correctAnswers', 'totalQuestions'));
            }

        } else {
            return view('welcome');
        }

    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
