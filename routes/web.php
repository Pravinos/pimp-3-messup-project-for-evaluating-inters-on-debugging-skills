<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\SviController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('/api/vehicles', VehicleController::class);
Route::apiResource('/api/vehicles.insurances', InsuranceController::class);
Route::apiResource('/api/vehicles.svis', SviController::class);
Route::apiResource('/api/vehicles.services', ServiceController::class);

// Route::get('/token', function () {
//     return csrf_token();
// });
