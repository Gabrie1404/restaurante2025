<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;

class PedidoController extends Controller
{
    public function cadastrar(Request $request)
    {
        
        $validatedData = $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente', // Verifica se o cliente existe
            'data' => 'required|date',
            'valor' => 'required|numeric|min:0',
        ]);

        
        Pedido::create([
            'id_cliente' => $validatedData['id_cliente'],
            'data' => $validatedData['data'],
            'valor' => $validatedData['valor'],
        ]);

        return redirect('/exibir_pedidos')->with('success', 'Pedido cadastrado com sucesso!');
    }
}
?>