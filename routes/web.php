<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('posts', PostController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('students', StudentController::class);
});


