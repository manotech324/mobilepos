
<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;


/**
 * Authentication Routes
 */
Route::prefix("auth")->group(function () {
    Route::get("register", [RegisterUserController::class, 'index'])->name('register');
    Route::post("register", [RegisterUserController::class, 'store'])->name('register.store');
    Route::get("login", [LoginController::class, 'index'])->name('login');
    Route::post("login", [LoginController::class, 'store'])->name('login.store');
    Route::post("logout",[LoginController::class,'destroy'])->name('logout')->middleware(['auth']);
});


Route::prefix("dashboard")->group(function () {
    Route::get('', function () {
        return view('pages.index');
    });
    Route::get('supplier', function () {
        return "Supplier pages";
    });
})->middleware(['auth']);


