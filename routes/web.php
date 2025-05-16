<?php

use App\Http\Controllers\Inventory\Brand\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Warehouse\WarehouseController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Inventory\Category\CategoryController;
use App\Http\Controllers\Inventory\Product\ProductController;
use App\Http\Controllers\Inventory\Subcategory\SubcategoryController;
use App\Http\Controllers\Inventory\Unit\UnitController;
use App\Http\Controllers\Inventory\Variant\VariantController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;



Route::get('/home/page', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
    return view('pages.index');
});
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('warehouse',WarehouseController::class)->middleware(['auth', 'verified']);
Route::resource('store',StoreController::class)->middleware(['auth', 'verified']);
Route::resource('category',CategoryController::class)->middleware(['auth', 'verified']);
Route::resource('subcategory',SubcategoryController::class)->middleware(['auth', 'verified']);
Route::resource('brand',BrandController::class)->middleware(['auth', 'verified']);
Route::resource('unit',UnitController::class)->middleware(['auth', 'verified']);
Route::resource('variant',VariantController::class)->middleware(['auth', 'verified']);
Route::resource('product',ProductController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
