<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpcionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroParceroController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\DetalleParceroController;
use App\Http\Controllers\RegistroFuenteController;
use App\Http\Controllers\RegistroFamiliaController;
use App\Http\Controllers\RegistroEmpleoController;
use App\Http\Controllers\RegistroCondicionController;
use App\Http\Controllers\RegistroPeticionController;
use App\Http\Controllers\RegistroRespuestaResultadoController;

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
    Route::post('registro-fuente/registrar', [RegistroFuenteController::class,'registrar']);
    //registro familia
    Route::post('registro-familia/datos-iniciales', [RegistroFamiliaController::class,'datoIniciales']);
    Route::post('registro-familia/registrar', [RegistroFamiliaController::class,'registrar']);
    //registro empleo
    Route::post('registro-empleo/datos-iniciales', [RegistroEmpleoController::class,'datoIniciales']);
    Route::post('registro-empleo/registrar', [RegistroEmpleoController::class,'registrar']);
    //registro condicion
    Route::post('registro-condicion/datos-iniciales', [RegistroCondicionController::class,'datoIniciales']);
    Route::post('registro-condicion/registrar', [RegistroCondicionController::class,'registrar']);
    //registro peticion
    Route::post('registro-peticion/datos-iniciales', [RegistroPeticionController::class,'datoIniciales']);
    Route::post('registro-peticion/registrar', [RegistroPeticionController::class,'registrar']);
    //registro respuesta resultado
    Route::post('registro-respuesta-resultado/datos-iniciales', [RegistroRespuestaResultadoController::class,'datoIniciales']);
    Route::post('registro-respuesta-resultado/registrar', [RegistroRespuestaResultadoController::class,'registrar']);
});