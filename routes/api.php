<?php

use App\Http\Controllers\Api\productosController;
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

Route::get('/productos', [productosController::class, 'index']);
Route::get('/productos/{id}', [productosController::class, 'show']);
Route::post('/productos', [productosController::class, 'storage']);
Route::put('/productos/{id}', [productosController::class, 'update']);
Route::delete('/productos/{id}', [productosController::class, 'destroy']);