<?php

use App\Models\Finance\Booking;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('new');
});

Route::get('/dev', function () {
    // dd(Gate::allows('admin'));
    // dd(resolve('ButtercupEvents'));
    //test notification
    // auth()->user()->notify((new \App\Notifications\BookingSuccess((new Booking())->find(1))));
    // return view('home');
});

Auth::routes();

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home', function () {
    return view('new');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/events', function () {
    return view('events');
});
Route::get('/events', [App\Http\Controllers\EventController::class, 'home'])->name('events');
Route::get('/event-details/{url}',App\Http\Controllers\EventController::class)->name('events.show');

Route::get('/event-details', function () {
    return view('event-details');
});


// invokable class does not have a function definition (name of the funtcion)
Route::get('{url}',App\Http\Controllers\PageController::class)->name('pages.show');

Route::group([
    'prefix' => 'user',
    'middleware' => ['auth:web'],
    'as' => 'user.',
], function () {

    Route::get('/profile', [App\Http\Controllers\UserController::class, 'show'])->name('profile.show');

    Route::post('/profile-update', [App\Http\Controllers\UserController::class, 'udpateProfile'])->name('profile.update');

    Route::get('/booking/{package}',[App\Http\Controllers\BookingController::class, 'show'])->name('booking.show');

    Route::post('/booking/{package}',[App\Http\Controllers\BookingController::class, 'bookEvent'])->name('booking.bookEvent');

    Route::get('/booking-success',[App\Http\Controllers\BookingController::class, 'success'])->name('booking.success');

    Route::get('/my-bookings',[App\Http\Controllers\BookingController::class, 'myBookings'])->name('booking.my-bookings');

    Route::get('/my-booking-detailed/{id}',[App\Http\Controllers\BookingController::class, 'myBookingsDetailed'])->name('booking.my-bookings-detailed');

    // post review
    Route::post('/review',[App\Http\Controllers\BookingController::class, 'customerReview'])->name('review.submit');

    Route::get('/my-reviews',[App\Http\Controllers\UserController::class, 'myReviews'])->name('review.my-reviews');

});

