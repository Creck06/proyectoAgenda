<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\SillaController;
use App\Http\Controllers\EstadoController;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('registrar',[AuthController::class,'register']);
Route::post('loguear',[AuthController::class,'login']);
Route::middleware('auth:sanctum')->get('/user',function(Request $request){

});
Route::apiResource('v1/Salones',SalonController::class);
Route::apiResource('v1/tipoevento',EventoController::class);
Route::apiResource('v1/tiposillas',SillaController::class);
Route::apiResource('v1/estados',EstadoController::class);