
<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductCategory;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SupplierBrand;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/**
 * Authentication Routes
 */
Route::prefix("auth")->group(function () {
    Route::get("register", [RegisterUserController::class, 'index'])->name('register');
    Route::post("register", [RegisterUserController::class, 'store'])->name('register.store');
    Route::get("login", [LoginController::class, 'index'])->name('login');
    Route::post("login", [LoginController::class, 'store'])->name('login.store');
    Route::post("logout", [LoginController::class, 'destroy'])->name('logout')->middleware(['auth']);
});

Route::middleware("auth")->prefix("dashboard")->group(function () {
    Route::view('', 'pages.index')->name("dashboard");
    Route::controller(SupplierController::class)->group(function () {
        Route::get('supplier', 'index')->name('supplier.index');
        Route::post('supplier/create', 'create')->name('supplier.create');
        Route::post('supplier/delete', 'destroy')->name('supplier.delete');
        Route::get('supplier/edit/{id}', 'edit')->name('supplier.edit');
        Route::post('supplier/update/{id}', 'update')->name('supplier.update');

    });

    Route::controller(SupplierBrand::class)->prefix('supplier-brand')->group(function () {
        Route::get('', 'index')->name('supplier-brand.index');
        Route::post('create', 'store')->name('supplier-brand.create');
        Route::post('delete', 'destroy')->name('supplier-brand.delete');
        Route::post('update/{id}', 'update')->name('supplier-brand.update');
    });

    Route::controller(ProductCategory::class)->prefix('product-category')->group(function () {
        Route::get('', 'index')->name('product-category.index');          
        Route::post('create', 'store')->name('product-category.create');  
        Route::post('delete', 'destroy')->name('product-category.delete');
        Route::post('update/{id}', 'update')->name('product-category.update');
    });

    Route::get("/variants", function () {
        return view('pages.variants');
    });
    
    Route::get('/products', function () {
        return view('pages.product-list');
    });
});

Route::get("/", function () {
    return redirect(route("dashboard"));
});

Route::fallback(function () {
    return view("pages.neutral.404");
});