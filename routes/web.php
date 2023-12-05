<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatologiaController;
use App\Http\Controllers\ProdutoController;
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
Route::get('/patologia/{id}', [PatologiaController::class, 'show'])->name('detalhaPatologia');
Route::get('/patologia/editar/{id}', [PatologiaController::class, 'edit'])->name('editarPatologia');
Route::post('/patologia/atualizar', [PatologiaController::class, 'update'])->name("atualizaPatologia");
Route::get('produto/{patologia_id}', [ProdutoController::class, 'create'])->name("formularioProduto");
Route::post('/formularioProduto', [ProdutoController::class, 'store'])->name("enviarFormularioProduto");
Route::get('/produto/editar/{id}', [ProdutoController::class, 'edit'])->name("editarProduto");
Route::post('/produto/atualizar', [ProdutoController::class, 'update'])->name('atualizaProduto');
Route::delete('/deletaeProduto/{id}', [ProdutoController::class, 'destroy'])->name('deletaProduto');