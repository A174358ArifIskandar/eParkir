<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect('login');
});

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/editParkingArea', [App\Http\Controllers\ParkingController::class, 'index'])->name('editParkingArea');

Route::get('/addParkingArea', function () {     
    return view('editParking.addParkingArea'); 
});

Route::get('/editParkingArea', function () {     
    return view('editParking.editParkingArea'); 
});

Route::get('/editParkingLot', function () {     
    return view('editParking.editParkingLot'); 
});