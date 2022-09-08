<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:admin']
    // 'middleware' => ['auth', 'admin']
], function () {
    //Dashboard
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

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
