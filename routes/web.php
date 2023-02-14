<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// -------------------------------------------------
// <=============== FRONTEND ROUTE LIST ============>
// -------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

// -------------------------------------------------
// <=============== BACKEND ROUTE LIST ============>
// -------------------------------------------------

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // BLog Category Route
    Route::name('admin.')->group(function () {
        Route::resource('category', BlogCategoryController::class);
    });
    // Brand Route
    Route::name('admin.')->group(function () {
        Route::resource('brand', BrandController::class);
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
