<?php

use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])
    ->name('admin.login');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])
    ->name('admin.logout');

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth:admin'],
    'as' => 'admin.',
    // 'middleware' => ['auth', 'admin']
], function () {
    //Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'home'])->name('dashboard');

    //Admins
    Route::resource('administrators', App\Http\Controllers\Admin\AdminController::class);

    //Users
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);

    //Pages
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class);

    //Booking
    Route::resource('bookings', App\Http\Controllers\Admin\BookingController::class);

    //Packages
    Route::resource('packages', App\Http\Controllers\Admin\PackageController::class);

    //Categories
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);

    //Events
    Route::resource('events', App\Http\Controllers\Admin\EventController::class);
});
