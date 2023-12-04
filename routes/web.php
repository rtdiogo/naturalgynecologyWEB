<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatologiaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('inicio');

Route::post('/login',[LoginController::class,'login'])->name("login");
Route::get('/home', function () {return view('home');})->name("home");
Route::get('/patologia', [PatologiaController::class,'index'])->name('patologia');
Route::get('/sair', [LoginController::class,'sair'])->name("sair");
Route::get('/formulario', [PatologiaController::class,'create'])->name("formulario");
Route::post("/enviarFormulario", [PatologiaController::class,'store'])->name('enviarFormulario');
Route::delete('/deletar/{id}', [PatologiaController::class,'destroy'])->name('deletaFormulario');
Route::post('/buscarPatologia', [PatologiaController::class,'search'])->name('buscarPatologia');