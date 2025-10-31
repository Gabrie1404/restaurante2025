<?php
namespace App\Http\Controllers;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::orderBy('nome')->paginate(15);
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create(){ return view('fornecedores.create'); }

    public function store(Request $request)
    {
        $request->validate(['nome'=>'required']);
        Fornecedor::create($request->all());
        return redirect()->route('fornecedores.index')->with('success','Fornecedor criado');
    }

    public function edit(Fornecedor $fornecedor){ return view('fornecedores.edit', compact('fornecedor')); }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        $request->validate(['nome'=>'required']);
        $fornecedor->update($request->all());
        return redirect()->route('fornecedores.index')->with('success','Fornecedor atualizado');
    }

    public function destroy(Fornecedor $fornecedor){ $fornecedor->delete(); return redirect()->route('fornecedores.index')->with('success','Fornecedor excluído'); }
}
