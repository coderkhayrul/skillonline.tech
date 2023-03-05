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
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// -------------------------------------------------
// <=============== FRONTEND ROUTE LIST ============>
// -------------------------------------------------

Route::get('/', [WebsiteController::class, 'home'])->name('web.home');
Route::get('/tutorials', [WebsiteController::class, 'allTutorials'])->name('web.tutorials');
Route::get('/books', [WebsiteController::class, 'allBooks'])->name('web.books');
Route::get('/news', [WebsiteController::class, 'allNews'])->name('web.news');
Route::get('/smart-phones', [WebsiteController::class, 'allSmartPhone'])->name('web.smart.phone');
Route::get('/smart-bands', [WebsiteController::class, 'allSmartBand'])->name('web.smart.band');
Route::get('/smart-watches', [WebsiteController::class, 'allSmartwatch'])->name('web.smart.watch');
Route::get('/feature-device', [WebsiteController::class, 'allFeatureDevice'])->name('web.feature.device');
Route::get('/smart-tablet', [WebsiteController::class, 'allSmartTablet'])->name('web.smart.tablet');
Route::get('/upcoming/smart-device', [WebsiteController::class, 'allUpcomingDevice'])->name('web.upcoming.smart.device');

// Brand Items
Route::get('/brands', [WebsiteController::class, 'allBrand'])->name('web.brands');
Route::get('/brands/{brand_name}', [WebsiteController::class, 'brandWiseShow'])->name('web.brand.wise.show');


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
        // BLog Category Status Update
        Route::get('/active/{slug}', 'active')->name('admin.category.active');
        Route::get('/deactive/{slug}', 'deactive')->name('admin.category.deactive');
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
        Route::get('/on/{slug}', 'on')->name('admin.brand.on');
        Route::get('/off/{slug}', 'off')->name('admin.brand.off');
        // brand Status Update
        Route::get('/active/{slug}', 'active')->name('admin.brand.active');
        Route::get('/deactive/{slug}', 'deactive')->name('admin.brand.deactive');
    });
    // Page Route
    Route::prefix('page')->controller(PageController::class)->group(function () {
        Route::get('/', 'index')->name('admin.page.index');
        Route::get('/create', 'create')->name('admin.page.create');
        Route::post('/', 'store')->name('admin.page.store');
        Route::get('edit/{slug}', 'edit')->name('admin.page.edit');
        Route::put('/{slug}', 'update')->name('admin.page.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.page.destroy');
    });
    // Banner Route
    Route::prefix('banner')->controller(BannerController::class)->group(function () {
        Route::get('/', 'index')->name('admin.banner.index');
        Route::get('/create', 'create')->name('admin.banner.create');
        Route::post('/', 'store')->name('admin.banner.store');
        Route::get('edit/{slug}', 'edit')->name('admin.banner.edit');
        Route::put('/{slug}', 'update')->name('admin.banner.update');
        Route::get('/delete/{slug}', 'destroy')->name('admin.banner.destroy');
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
