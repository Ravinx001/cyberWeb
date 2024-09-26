<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

            $status = DB::table('quiz_progress')
                ->where('user_id', '=', $user->id)
                ->latest()
                ->first();

            try {
                $ques = $status->questionProgress;
            } catch (\Throwable $th) {
                //throw $th;
            }

            if ($ques >= 10) {
                $quizRoute = "quiz.delete";
                $text = "Retake the Quiz";

                return view('welcome', compact('quizRoute', 'text'));
            } else {
                $quizRoute = "quiz.create";
                $text = "Go to Quiz";

                return view('welcome', compact('quizRoute', 'text'));
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
