<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastro_ingredientes;

class IngredienteController extends Controller
{
    public function cadastrar(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:100',
            'fornecedor' => 'required|string|max:100',
            'quantidade' => 'required|numeric|min:0',
        ]);

        $id = cadastro_ingredientes::max('id_ingrediente') + 1;

        cadastro_ingredientes::create([
            'id_ingrediente' => $id,
            'nome' => $validatedData['nome'],
            'quantidade' => $validatedData['quantidade'],
            'preco' => 0,
        ]);

        return redirect('/exibir_ingredientes')->with('success', 'Ingrediente cadastrado com sucesso!');
    }
}
?>