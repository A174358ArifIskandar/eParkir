<?php

use App\Http\Controllers\ParkingController;
use App\Http\Controllers\ParkingAreaController;
use App\Http\Controllers\BookParkingController;
use App\Http\Controllers\ParkingStatusController;
use App\Http\Controllers\ProfileController;
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
Route::get('/logout', function () {
    return redirect('login');
});
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/editParkingArea', [App\Http\Controllers\ParkingController::class, 'index'])->name('editParkingArea');

// Route::get('/addParkingArea', function () {     
//     return view('editParking.addParkingArea'); 
// });

// Route::get('/editParkingArea', function () {     
//     return view('editParking.editParkingArea'); 
// });

Route::get('/invoice', function () {
    return view('student.myParking.invoice');
});

Route::get('/error', function () {
    return view('layouts.error');
});

Route::get('/profile', function () {
    return view('student.profile');
});

Route::get('/disableParking', function () {
    return view('admin.editParking.disableParking');
});


Route::get('/bookParking/{id}/edit/{lot}', [BookParkingController::class, 'edit'])->name('bookParking.edit');
Route::get('/parkingArea/{id}/edit/{name}', [ParkingAreaController::class, 'edit'])->name('parkingArea.edit');
Route::get('/profile/{id}/edit/{name}/{lotno}', [ProfileController::class, 'edit'])->name('profile.edit');
Route::resource('parkingArea', ParkingAreaController::class)->except(['edit']);
Route::resource('bookParking', BookParkingController::class)->except(['edit']);
Route::resource('profile', ProfileController::class)->except(['edit']);
Route::resource('parkingStatus', ParkingStatusController::class);
// Route::get('/displayParking', [App\Http\Controllers\ParkingController::class, 'index'])->name('displayParking');