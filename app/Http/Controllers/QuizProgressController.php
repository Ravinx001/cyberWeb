<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizProgressRequest;
use App\Http\Requests\UpdateQuizProgressRequest;
use App\Models\QuizProgress;
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

        $QuesStatus = DB::table('questions')
            ->where('question', '=', $question)
            ->where('answer', '=', $answer)
            ->count();

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

        $userId = $user->id;

        if ($QuesStatus > 0 && $ques == 0) {
            $quiz = QuizProgress::create([
                'user_id' => $userId,
                'questionProgress' => $question,
            ]);

            $nextQuestion = $question + 1;

            $view = "user.quetions.quiz{$nextQuestion}";

            return view($view);

        } else if ($QuesStatus > 0 && $ques >= 1 && $ques < 9) {

            DB::table('quiz_progress')
                ->where('user_id', $userId)
                ->update(['questionProgress' => $question]);

            $nextQuestion = $question + 1;

            $view = "user.quetions.quiz{$nextQuestion}";

            return view($view);

        } else if ($ques >= 9) {

            DB::table('quiz_progress')
                ->where('user_id', $userId)
                ->update(['questionProgress' => $question]);

            return redirect(route('home'))->with('success', 'You Completed the Quiz !');

        } else {
            $errors = new MessageBag();

            // Add your custom validation error.
            $errors->add('answer', 'Incorrect Answer !');

            return redirect()->back()->withInput()->withErrors($errors);
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
