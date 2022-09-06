<?php

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
    return view('welcome');
});

Route::get('/dev', function () {
    dd(Gate::allows('admin'));
    dd(resolve('ButtercupEvents'));
    return view('home');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

