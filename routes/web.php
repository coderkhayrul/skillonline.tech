<?php

use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\SocialMediaController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BasicAnalyticController;
use App\Http\Controllers\Backend\BlogTagController;
use App\Http\Controllers\Backend\BasicSettingController;
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

    // User Route
    Route::prefix('user')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('admin.user.index');
        Route::get('/create', 'create')->name('admin.user.create');
        Route::post('/', 'store')->name('admin.user.store');
        Route::get('edit/{slug}', 'edit')->name('admin.user.edit');
        Route::put('/{slug}', 'update')->name('admin.user.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.user.destroy');
    });
    // Role Route
    Route::prefix('role')->controller(RoleController::class)->group(function () {
        Route::get('/', 'index')->name('admin.role.index');
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
    // Blog Tag Route
    Route::prefix('tag')->controller(BlogTagController::class)->group(function (){
        Route::get('/', 'index')->name('admin.tag.index');
        Route::get('/create', 'create')->name('admin.tag.create');
        Route::post('/', 'store')->name('admin.tag.store');
        Route::get('edit/{slug}', 'edit')->name('admin.tag.edit');
        Route::put('/{slug}', 'update')->name('admin.tag.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.tag.destroy');
        // Tag Status Update
        Route::get('/active/{slug}', 'active')->name('admin.tag.active');
        Route::get('/deactive/{slug}', 'deactive')->name('admin.tag.deactive');
    });

    // Brand Route
    Route::prefix('brand')->controller(BrandController::class)->group(function () {
        Route::get('/', 'index')->name('admin.brand.index');
        Route::get('/create', 'create')->name('admin.brand.create');
        Route::post('/', 'store')->name('admin.brand.store');
        Route::get('edit/{slug}', 'edit')->name('admin.brand.edit');
        Route::put('/{slug}', 'update')->name('admin.brand.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.brand.destroy');
        // brand feature Status Update
        Route::get('/active/{slug}', 'active')->name('admin.brand.active');
        Route::get('/deactive/{slug}', 'deactive')->name('admin.brand.deactive');
    });
    //setting
    Route::prefix('setting')->group(function () {
        Route::prefix('socialmedia')->controller(SocialMediaController::class)->group(function () {
            Route::get('/', 'index')->name('admin.setting.socialmedia.index');
            Route::put('/update', 'update')->name('admin.setting.socialmedia.update');
        });
        Route::prefix('analytic')->controller(BasicAnalyticController::class)->group(function () {
            Route::get('/', 'index')->name('admin.setting.analytic.index');
            Route::put('/update', 'update')->name('admin.setting.analytic.update');
        });
        Route::prefix('basicsetting')->controller(BasicSettingController::class)->group(function (){
            Route::get('/', 'index')->name('admin.setting.basicsetting.index');
            Route::put('/update', 'update')->name('admin.setting.basicsetting.update');
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
