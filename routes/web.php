<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;

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

Route::get('/account/newride', function () {
    return view('impact/account/newride');
});

Route::get('/banned', function () {
    return view('errors/banned');
})->middleware(['verified']);


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware(['verified']);;
Route::get('/account/settings', [App\Http\Controllers\AccountController::class, 'index'])->name('accsettings');

Fortify::verifyEmailView(function () {
    return view('auth.verify-email');
});
