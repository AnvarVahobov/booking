<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/resources', [ResourceController::class, 'index']);
Route::post('/resources', [ResourceController::class, 'store']);

Route::post('/bookings', [BookingController::class, 'store']);
Route::get('/resources/{id}/bookings', [BookingController::class, 'indexByResource']);
Route::delete('/bookings/{id}', [BookingController::class, 'destroy']);

