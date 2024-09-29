<?php

use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

// route in index
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/staff', function () {
    return view('employee');
})->name('staff');

Route::get('/training', [TrainingController::class, 'index'])->name('training');

