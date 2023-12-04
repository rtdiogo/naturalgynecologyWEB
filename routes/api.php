<?php

use App\Http\Controllers\API\PatologiaController;
use App\Http\Controllers\API\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/patologia', [PatologiaController::class, 'index']);
Route::get('/patologia/{id}', [PatologiaController::class,'show']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);