<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;

// route in index
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/staff', function () {
    return view('employee');
})->name('staff');

Route::get('/training', [TrainingController::class, 'index'])->name('training');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
