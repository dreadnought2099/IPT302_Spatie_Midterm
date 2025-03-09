<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecordController;
use App\Models\Record;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/records', [RecordController::class, 'index'])
        ->name('records.index');

    Route::get('/records/create', [RecordController::class, 'create'])
        ->middleware('role:Data Entry')
        ->name('records.create');

    Route::post('/records', [RecordController::class, 'store'])
        ->middleware('role:Data Entry')
        ->name('records.store');

    Route::get('/records/{record}/edit', [RecordController::class, 'edit'])
        ->middleware('role:Administrator')
        ->name('records.edit');    

    Route::put('/records/{record}', [RecordController::class, 'update'])
        ->middleware('role:Administrator')
        ->name('records.update');    

    Route::delete('/records/{record}', [RecordController::class, 'destroy'])
        ->middleware('role:Administrator')
        ->name('records.destroy');    

    Route::get('/records/{record}', [RecordController::class, 'show'])
        ->name('records.show');
}); 