<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

    Route::get('/records', [RecordController::class, 'index'])->name('records.index');
    Route::get('/records/create', [RecordController::class, 'create'])->name('records.create');
    Route::post('/records', [RecordController::class, 'store'])->name('records.store');
    
    Route::middleware(['auth', 'role:Administrator'])->group(function () {
        Route::get('/records/{record}/edit', [RecordController::class, 'edit'])->name('records.edit');
        Route::put('/records/{record}', [RecordController::class, 'update'])->name('records.update');
        Route::delete('/records/{record}', [RecordController::class, 'destroy'])->name('records.destroy');
    });
});
