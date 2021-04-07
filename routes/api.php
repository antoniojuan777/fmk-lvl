<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpcionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroParceroController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\DetalleParceroController;
use App\Http\Controllers\RegistroFuenteController;

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
    //generales
    Route::post('logout', [UserController::class,'logout']);
    Route::get('datos-iniciales', [InicioController::class,'datosIniciales']);
    //registro parcero
    Route::post('registro-parcero/datos-iniciales', [RegistroParceroController::class,'datoIniciales']);
    Route::post('registro-parcero/registrar', [RegistroParceroController::class,'registrar']);
    //detalle parcero
    Route::post('detalle-parcero/datos-iniciales', [DetalleParceroController::class,'datosIniciales']);
    //registro fuente
    Route::post('registro-fuente/datos-iniciales', [RegistroFuenteController::class,'datoIniciales']);
});