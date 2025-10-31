<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PratoController;
use App\Http\Controllers\EncomendaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\CompraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('encomendas.index');
});



Route::resource('clientes', ClienteController::class);
Route::resource('pratos', PratoController::class);
Route::resource('encomendas', EncomendaController::class); 
Route::resource('ingredientes', IngredienteController::class);
Route::resource('fornecedores', FornecedorController::class);
Route::resource('compras', CompraController::class)->only(['index','create','store']);