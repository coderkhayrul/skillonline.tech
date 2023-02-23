<?php

use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\SocialMediaController;
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

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Role Route
    Route::prefix('role')->controller(RoleController::class)->group(function () {
        Route::get('/', 'index')->name('admin.role.index');
        Route::get('/create', 'create')->name('admin.role.create');
        Route::post('/', 'store')->name('admin.role.store');
        Route::get('edit/{slug}', 'edit')->name('admin.role.edit');
        Route::put('/{slug}', 'update')->name('admin.role.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.role.destroy');
    });

    // BLog Category Route
    Route::prefix('category')->controller(BlogCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('admin.category.index');
        Route::get('/create', 'create')->name('admin.category.create');
        Route::post('/', 'store')->name('admin.category.store');
        Route::get('edit/{slug}', 'edit')->name('admin.category.edit');
        Route::put('/{slug}', 'update')->name('admin.category.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.category.destroy');
    });

    // Brand Route
    Route::prefix('brand')->controller(BrandController::class)->group(function () {
        Route::get('/', 'index')->name('admin.brand.index');
        Route::get('/create', 'create')->name('admin.brand.create');
        Route::post('/', 'store')->name('admin.brand.store');
        Route::get('edit/{slug}', 'edit')->name('admin.brand.edit');
        Route::put('/{slug}', 'update')->name('admin.brand.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.brand.destroy');
    });
    //setting
    Route::prefix('setting')->group(function (){
        Route::prefix('socialmedia')->controller(SocialMediaController::class)->group(function () {
            Route::get('/', 'index')->name('admin.setting.socialmedia.index');
            Route::put('/update', 'update')->name('admin.setting.socialmedia.update');
        });
    });

    // Route::name('admin.')->group(function () {
    //     Route::resource('brand', BrandController::class);
    // });
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
