<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// CONTROLLERS
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InquiryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// AUTH
Route::get('/user/search/{email}', [UserController::class, 'search']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    // USER
    Route::get('/user', [UserController::class, 'index']);
    // Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::delete('/user/destroy/{id}', [UserController::class, 'destroy']);
    Route::put('/user/restore/{id}', [UserController::class, 'restore']);

    // INQUIRY
    Route::get('/inquiry', [InquiryController::class, 'index']);
    Route::post('/inquiry', [InquiryController::class, 'store']);
    Route::get('/inquiry/{id}', [InquiryController::class, 'show']);
    Route::put('/inquiry/{id}', [InquiryController::class, 'update']);
    Route::delete('/inquiry/destroy/{id}', [InquiryController::class, 'destroy']);
    Route::put('/inquiry/restore/{id}', [InquiryController::class, 'restore']);
});
