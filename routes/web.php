<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

// Worker Routes
Route::middleware(['auth', 'verified', 'worker'])->group(function () {
    Route::get('/worker/dashboard', function () {
        return view('worker.dashboard');
    })->name('worker.dashboard');

    Route::get('/worker/profile', [ProfileController::class, 'edit'])->name('worker.profile.edit');
    Route::patch('/worker/profile', [ProfileController::class, 'update'])->name('worker.profile.update');
});


// Supervisor Routes
Route::middleware(['auth', 'verified', 'supervisor'])->group(function () {
    Route::get('/supervisor/dashboard', function () {
        return view('supervisor.dashboard');
    })->name('supervisor.dashboard');

    Route::get('/supervisor/profile', [ProfileController::class, 'edit'])->name('supervisor.profile.edit');
    Route::patch('/supervisor/profile', [ProfileController::class, 'update'])->name('supervisor.profile.update');
});


// Manager Routes
Route::middleware(['auth', 'verified', 'manager'])->group(function () {
    Route::get('/manager/dashboard', function () {
        return view('manager.dashboard');
    })->name('manager.dashboard');

    Route::get('/manager/profile', [ProfileController::class, 'edit'])->name('manager.profile.edit');
    Route::patch('/manager/profile', [ProfileController::class, 'update'])->name('manager.profile.update');
});

// Admin Routes
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/register', [RegisteredUserController::class, 'create'])
        ->name('admin.register.create');
    Route::post('/admin/register', [RegisteredUserController::class, 'store'])->name('admin.register.store');

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__ . '/auth.php';
