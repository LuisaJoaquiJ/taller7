<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('categorias', [ApiCategoriaController::class, 'index']);
Route::post('categorias', [ApiCategoriaController::class, 'store']);
Route::get('categorias/{id}', [ApiCategoriaController::class, 'show']);
Route::put('categorias/{id}', [ApiCategoriaController::class, 'update']);
Route::delete('categorias/{id}', [ApiCategoriaController::class, 'destroy']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:api')->group(function () {
    Route::apiResource('categorias', CategoriaController::class);
});
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('api')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/categorias', [CategoriaController::class, 'index']);
    // otras rutas protegidas
});


