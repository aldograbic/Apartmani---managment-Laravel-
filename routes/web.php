<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});
Route::get('/managment', function () {
    return view('managment');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/apartments', [ApartmentController::class, 'index'])->name('apartments.index');
Route::get('/prices_table', [ApartmentController::class, 'prices_table'])->name('apartments.prices_table');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/total_made', [ReservationController::class, 'total_made'])->name('reservations.total_made');


Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/search', [SearchController::class, 'search'])->name('search');

