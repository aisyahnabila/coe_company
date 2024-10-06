<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PartnershipController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// route for globar user
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/staff', function () {
    return view('employee');
})->name('staff');


// route for CMS

Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('articles', ArticleController::class);
    Route::get('/admin/articles', [ArticleController::class, 'index'])->name('articles.index');

    Route::resource('partnerships', PartnershipController::class);
});

