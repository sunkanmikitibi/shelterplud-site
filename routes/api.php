<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\planscontroller;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StateController;
use App\Http\Controllers\Api\VedorController;
use App\Http\Controllers\Api\MoversController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\HomeInteriorController;
use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\PropertyManagerController;
use App\Http\Controllers\Api\InteriorApplicationController;


Route::post('register', [AuthenticationController::class, 'register_user']);
Route::post('login', [AuthenticationController::class, 'login_user']);

Route::post('property', [PropertyController::class, 'store'])->middleware('auth:sanctum');
Route::post('interiormanager', [InteriorApplicationController::class, 'store']);
//Route::post('homeinterior', [HomeInteriorController::class, 'store']);
Route::post('movers', [MoversController::class, 'store']);
Route::post('propertymanagers', [PropertyManagerController::class, 'store']);

Route::get('homeinteriorapplication', [HomeInteriorController::class, 'index']);
Route::get('propertymanagers', [PropertyManagerController::class, 'index']);
Route::get('movers', [MoversController::class, 'index']);
Route::get('interiormanager', [InteriorApplicationController::class, 'index']);
Route::get('roles', [RoleController::class, 'index']);
Route::get('locations', [LocationController::class, 'index']);
Route::get('property', [PropertyController::class, 'index']);
Route::get('types', [TypeController::class, 'index']);
Route::get('users', [UserController::class, 'index']);
Route::get('property/{id}', [PropertyController::class, 'show']);
Route::get('posts', [BlogController::class, 'index']);
Route::get('states', [StateController::class, 'index']);
Route::get('plans', [planscontroller::class, 'getAllPlans']);
Route::get('developerplans', [planscontroller::class, 'getDeveloperPlans']);
Route::get('agentplans', [planscontroller::class, 'getAgentPlans']);
Route::get('homeinteriorplans', [planscontroller::class, 'getHomeInteriorPlans']);
Route::get('propertymgtplans', [planscontroller::class, 'getPropertyMgtPlans']);

Route::get('vendors', [VedorController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
