<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SeatAllocationController;

// Location routes
Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/{location}', [LocationController::class, 'show']);

// User routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);

// Trip routes
Route::get('/trips', [TripController::class, 'index']);
Route::get('/trips/{trip}', [TripController::class, 'show']);

// SeatAllocation routes
Route::get('/seat_allocations', [SeatAllocationController::class, 'index']);
Route::get('/seat_allocations/{seatAllocation}', [SeatAllocationController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
