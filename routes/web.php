<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegistrationController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

    // Record routes
    Route::prefix('records')->group(function () {
        Route::get('/', [RecordController::class, 'index'])->name('records.index');
        Route::get('/add', [RecordController::class, 'create'])->name('records.create');
        Route::post('/', [RecordController::class, 'store'])->name('records.store');

        // Administrator
        Route::middleware(['role:Administrator'])->group(function () {
            Route::get('/{record}/edit', [RecordController::class, 'edit'])->name('records.edit');
            Route::put('/{record}', [RecordController::class, 'update'])->name('records.update');
            Route::delete('/{record}', [RecordController::class, 'destroy'])->name('records.destroy');
        });
    });

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});
