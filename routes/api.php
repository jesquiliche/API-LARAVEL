<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/categorias', App\Http\Controllers\Api\V1\CategoriaController::class)->middleware('api');
Route::apiResource('v1/ivas', App\Http\Controllers\Api\V1\IvaController::class);
Route::apiResource('v1/productos', App\Http\Controllers\Api\V1\ProductoController::class);
Route::apiResource('v1/ofertas', App\Http\Controllers\Api\V1\OfertaController::class);
Route::apiResource('v1/poblaciones', App\Http\Controllers\Api\V1\PoblacionController::class);