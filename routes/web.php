
<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::prefix("auth")->group(function () {
    Route::get("register", [RegisterUserController::class, 'index'])->name('register');
    Route::get("login", [LoginController::class, 'index'])->name('login');
    Route::get("forgot-password", [ResetPasswordController::class, 'index'])->name('password.request'); 
});