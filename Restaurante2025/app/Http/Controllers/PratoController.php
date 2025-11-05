<?php
namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    
    public function showForm()
    {
        return view('cadastro_pratos');
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'nome' => 'required|max:100',
            'preco' => 'required|numeric',
        ]);

        
        Prato::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
        ]);

        
        return redirect()->route('cadastro_pratos')->with('success', 'Prato cadastrado com sucesso!');
    }
}
?>