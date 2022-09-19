<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// CONTROLLERS
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\PersonInChargeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\EquipmentController;

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
    Route::get('/user/datatable', [UserController::class, 'datatable']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::delete('/user/destroy/{id}', [UserController::class, 'destroy']);
    Route::put('/user/restore/{id}', [UserController::class, 'restore']);

    // INQUIRY
    Route::get('/inquiry', [InquiryController::class, 'index']);
    Route::post('/inquiry', [InquiryController::class, 'store']);
    Route::get('/inquiry/datatable', [InquiryController::class, 'datatable']);
    Route::get('/inquiry/{id}', [InquiryController::class, 'show']);
    Route::get('/inquiry/show_user/{id}', [InquiryController::class, 'show_user']);
    Route::put('/inquiry/{id}', [InquiryController::class, 'update']);
    Route::delete('/inquiry/destroy/{id}', [InquiryController::class, 'destroy']);
    Route::put('/inquiry/restore/{id}', [InquiryController::class, 'restore']);

    // CONDITION
    Route::get('/condition', [ConditionController::class, 'index']);
    Route::get('/condition/datatable', [ConditionController::class, 'datatable']);
    Route::post('/condition', [ConditionController::class, 'store']);
    Route::get('/condition/{id}', [ConditionController::class, 'show']);
    Route::put('/condition/{id}', [ConditionController::class, 'update']);
    Route::delete('/condition/destroy/{id}', [ConditionController::class, 'destroy']);
    Route::put('/condition/restore/{id}', [ConditionController::class, 'restore']);

    // SOURCE
    Route::get('/source', [SourceController::class, 'index']);
    Route::get('/source/datatable', [SourceController::class, 'datatable']);
    Route::post('/source', [SourceController::class, 'store']);
    Route::get('/source/{id}', [SourceController::class, 'show']);
    Route::put('/source/{id}', [SourceController::class, 'update']);
    Route::delete('/source/destroy/{id}', [SourceController::class, 'destroy']);
    Route::put('/source/restore/{id}', [SourceController::class, 'restore']);

    // PERSON IN CHARGE
    Route::get('/person_in_charge', [PersonInChargeController::class, 'index']);
    Route::get('/person_in_charge/datatable', [PersonInChargeController::class, 'datatable']);
    Route::post('/person_in_charge', [PersonInChargeController::class, 'store']);
    Route::get('/person_in_charge/{id}', [PersonInChargeController::class, 'show']);
    Route::put('/person_in_charge/{id}', [PersonInChargeController::class, 'update']);
    Route::delete('/person_in_charge/destroy/{id}', [PersonInChargeController::class, 'destroy']);
    Route::put('/person_in_charge/restore/{id}', [PersonInChargeController::class, 'restore']);

    // INVENTORY
    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::get('/inventory/datatable', [InventoryController::class, 'datatable']);
    Route::post('/inventory', [InventoryController::class, 'store']);
    Route::get('/inventory/{id}', [InventoryController::class, 'show']);
    Route::put('/inventory/{id}', [InventoryController::class, 'update']);
    Route::delete('/inventory/destroy/{id}', [InventoryController::class, 'destroy']);
    Route::put('/inventory/restore/{id}', [InventoryController::class, 'restore']);

    // EQUIPMENT
    Route::get('/equipment', [EquipmentController::class, 'index']);
    Route::get('/equipment/datatable', [EquipmentController::class, 'datatable']);
    Route::post('/equipment', [EquipmentController::class, 'store']);
    Route::get('/equipment/{id}', [EquipmentController::class, 'show']);
    Route::put('/equipment/{id}', [EquipmentController::class, 'update']);
    Route::delete('/equipment/destroy/{id}', [EquipmentController::class, 'destroy']);
    Route::put('/equipment/restore/{id}', [EquipmentController::class, 'restore']);

});
