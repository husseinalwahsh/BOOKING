<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\staticController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CountrysController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;


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

Route::get('aLogin',function(){
    return view('admin.auth.login');
});



Route::group(['namespace'=>'Admin','prefix'=>'adnmin','middleware'=>'guest:admin'],function(){

    Route::get('Hotel/create',[HotelController::class,'create'])->name('hotel.create');
    Route::get('login',[LoginController::class,'show_login_view'])->name('admin.showlogin');
    Route::post('login',[LoginController::class,'login'])->name('admin.login');
});



Route::group(['namespace'=>'Admin','prefix'=>'adnmin','middleware'=>'auth:admin'],function(){

    Route::get('Hotel/create',[HotelController::class,'create'])->name('hotel.create');
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/booking/edit/{id}',[BookingController::class,'edit'])->name('admin.edit');
    Route::post('booking/update/{id}',[BookingController::class,'update'])->name('admin.update');
    
    Route::get('booking/index',[BookingController::class,'index'])->name('admin.index');
    Route::get('/booking/destroy/{id}',[BookingController::class,'destroy'])->name('admin.delete');
    
});
