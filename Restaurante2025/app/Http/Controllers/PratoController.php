<?php
namespace App\Http\Controllers;
use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    public function index()
    {
        $pratos = Prato::orderBy('nome')->paginate(15);
        return view('pratos.index', compact('pratos'));
    }

    public function create()
    {
        return view('pratos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'preco_unitario'=>'required|numeric'
        ]);
        Prato::create($request->all());
        return redirect()->route('pratos.index')->with('success','Prato criado');
    }

    public function edit(Prato $prato)
    {
        return view('pratos.edit', compact('prato'));
    }

    public function update(Request $request, Prato $prato)
    {
        $request->validate([
            'nome'=>'required',
            'preco_unitario'=>'required|numeric'
        ]);
        $prato->update($request->all());
        return redirect()->route('pratos.index')->with('success','Prato atualizado');
    }

    public function destroy(Prato $prato)
    {
        $prato->delete();
        return redirect()->route('pratos.index')->with('success','Prato excluído');
    }

    public function show(Prato $prato)
    {
        return view('pratos.show', compact('prato'));
    }
}
