<?php

use App\Models\Pedidos;
use App\Models\Pratos;
use App\Models\Relatorios;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Ingredientes;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

/*  -------------------------------  */

Route::get('/cadastro_pedidos', function () {
    return view('cadastro_pedidos');
});

Route::post('/pedidos/cadastrar', function (Request $request) {
    $Pedido = new Pedidos();

    $Pedido->InsertItems(
        $request->input('ItemDate'),
        $request->input('ItemPrice')
    );

    return view('cadastro_pedidos', ["dado" => "Pedido cadastrado com sucesso!"]);
});

/*  -------------------------------  */

Route::get('/cadastro_ingredientes', function () {
    return view('cadastro_ingredientes');
});

Route::post('/ingredientes/cadastrar', function (Request $request) {
    $Ingrediente = new Ingredientes();

    $Ingrediente->InsertItems(
        $request->input('ItemName'),
        $request->input('ItemQuantity'),
        $request->input('ItemPrice')
    );

    return view('cadastro_ingredientes', ["dado" => "Ingrediente cadastrado com sucesso!"]);
});

/*  -------------------------------  */

Route::get('/cadastro_pratos', function () {
    return view('cadastro_pratos');
});

Route::post('/pratos/cadastrar', function (Request $request) {
    $Prato = new Pratos();

    $Prato->InsertItems(
        $request->input('ItemName'),
        $request->input('ItemPrice')
    );

    return view('cadastro_pratos', ["dado" => "Prato cadastrado com sucesso!"]);
});

/*  -------------------------------  */

Route::get('/exibir_ingredientes', function () {
    $ingredientes = (new Ingredientes())->ListItems();
    return view('exibir_ingredientes', compact('ingredientes'));
});

/*  -------------------------------  */

Route::get('/exibir_pedidos', function () {
    $pedidos = (new Pedidos())->ListItems();
    return view('exibir_pedidos', compact('pedidos'));
});

/*  -------------------------------  */

Route::get('/exibir_pratos', function () {
    $pratos = (new Pratos())->ListItems();
    return view('exibir_pratos', compact('pratos'));
});

/*  -------------------------------  */

Route::get('/exibir_relatorio', function () {
    $relatorios = (new Relatorios())->ListItems();
    return view('exibir_relatorio', compact('relatorios'));
});


/*  -------------------------------  */

Route::get('/contato', function () {
    return view('contato');
});
