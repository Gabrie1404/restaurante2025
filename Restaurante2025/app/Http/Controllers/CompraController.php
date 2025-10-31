<?php
namespace App\Http\Controllers;
use App\Models\Compra;
use App\Models\Ingrediente;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::with('ingrediente','fornecedor')->orderByDesc('data_compra')->paginate(20);
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        $ingredientes = Ingrediente::orderBy('nome')->get();
        $fornecedores = Fornecedor::orderBy('nome')->get();
        return view('compras.create', compact('ingredientes','fornecedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ingrediente_id'=>'required|exists:ingredientes,id',
            'fornecedor_id'=>'required|exists:fornecedores,id',
            'quantidade'=>'required|integer',
            'data_compra'=>'required|date'
        ]);
        Compra::create($request->all());
        return redirect()->route('compras.index')->with('success','Compra registrada');
    }
}
