<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\QuizProgressController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register.create');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


// User Routes
Route::middleware(['auth', 'user'])->group(function () {

    Route::get('/user/quiz', [QuizProgressController::class, 'create'])
        ->name('quiz.create');

    Route::post('/user/quiz', [QuizProgressController::class, 'store'])
        ->name('quiz.store');

    Route::get('/user/quiz/retake', [QuizProgressController::class, 'destroy'])
        ->name('quiz.delete');

    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('user.profile.update');
});


// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__ . '/auth.php';
