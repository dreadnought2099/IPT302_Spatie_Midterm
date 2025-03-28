<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes(['verify' => true]);

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegistrationController::class, 'register']);
});

// For verifying the email registered
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [VerificationController::class, 'notice'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('signed')->name('verification.verify');
    Route::post('/email/resend', [VerificationController::class, 'resend'])->middleware('throttle:6,1')->name('verification.resend');
});

// Logout outside the verified middleware so user can still logout even the email is unverified
Route::middleware('auth')->post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {

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
