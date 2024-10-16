<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnershipController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandigPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// route for globar user
Route::get('/', [LandigPageController::class, 'index'])->name('index');
Route::get('/staff', [LandigPageController::class, 'staff'])->name('staff');

// route for CMS

Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('articles', ArticleController::class);
    // Route::resource('categories', CategoryArticleController::class);
    Route::resource('partnerships', PartnershipController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('mitra', MitraController::class);
    Route::resource('page', PageController::class);
});

