<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\RideController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\FrontendBookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/book', function () {
        return view('booking');
    });
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::resource('/vehicles', VehicleController::class);
    Route::resource('/rides', RideController::class);
    Route::resource('/drivers', DriverController::class);
    Route::resource('/bookings', BookingController::class);
    Route::resource('/users', UserController::class);
});

Route::get('booking', [FrontendBookingController::class, 'stepOne'])->name('booking.one');
Route::post('booking', [FrontendBookingController::class, 'storeStepOne'])->name('booking.store.one');
Route::get('bookingTwo', [FrontendBookingController::class, 'stepTwo'])->name('booking.two');
Route::post(('bookingTwo'), [FrontendBookingController::class, 'storeStepTwo'])->name('booking.store.two');
Route::get('/yourbookings', [FrontendBookingController::class, 'yourbookings'])->name('booking.view');

Route::delete('/bookings/{id}', [FrontendBookingController::class, 'destroy'])->name('booking.destroy');








require __DIR__ . '/auth.php';
