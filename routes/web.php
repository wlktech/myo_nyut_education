<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('dashboard');
    Route::resource('users', UserController::class);

});

require __DIR__.'/auth.php';
