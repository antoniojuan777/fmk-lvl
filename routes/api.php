<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpcionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroParceroController;
use App\Http\Controllers\InicioController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('users', [UserController::class,'store']);
Route::post('login', [UserController::class,'login']);

Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::ApiResource('opciones',OpcionController::class);
    Route::post('logout', [UserController::class,'logout']);
    //inicio
    Route::get('datos-iniciales', [InicioController::class,'datosIniciales']);
    //registro parcero
    Route::get('registro-parcero/datos-iniciales', [RegistroParceroController::class,'datoIniciales']);
    Route::post('registro-parcero/registrar', [RegistroParceroController::class,'registrar']);
});