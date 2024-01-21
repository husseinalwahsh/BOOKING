<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\staticController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CountrysController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[CountrysController::class,'index'])->name('Home');
Route::get('/login',[HomeController::class,'Login'])->name('login');
Route::get('/Register',[HomeController::class,'Register'])->name('Register');
Route::get('/hotel',[HotelController::class,'index'])->name('hotel.index');
Route::post('Hotel/store',[HotelController::class,'store'])->name('hotel.store');

//search for a hotel
Route::post('/hotel/search',[HotelController::class,'search'])->name('hotel.sreach');

Auth::routes();

Route::get('/booking/{id}',[BookingController::class,'create'])->name('booking.create')->middleware('auth');
Route::post('booking/{id}/store',[BookingController::class,'store'])->name('booking.store');
Route::get('/bookings/{userId}',[BookingController::class,'showBookingsForUser'])->name('index_user');
Route::get('/booking/destroy/{id}',[BookingController::class,'destroy'])->name('booking.delete');