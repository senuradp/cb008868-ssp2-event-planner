<?php

use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])
    ->name('admin.login');

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth:admin'],
    'as' => 'admin.',
    // 'middleware' => ['auth', 'admin']
], function () {
    //Dashboard
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

    //Users
    Route::resource('users', App\Http\Controllers\UserController::class);

    //Pages
    // Route::resource('pages', App\Http\Controllers\PageController::class);

    //Booking
    // Route::resource('bookings', App\Http\Controllers\BookingController::class);

    //Packages
    // Route::resource('packages', App\Http\Controllers\PackagesController::class);

    //Promotions
    // Route::resource('promotions', App\Http\Controllers\PromotionController::class);

    //Categories
    // Route::resource('categories', App\Http\Controllers\CategoryController::class);

    //Events
    // Route::resource('events', App\Http\Controllers\EventController::class);
});
