<?php
namespace App\Http\Controllers;
use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::orderBy('nome')->paginate(15);
        return view('ingredientes.index', compact('ingredientes'));
    }

    public function create(){ return view('ingredientes.create'); }

    public function store(Request $request)
    {
        $request->validate(['nome'=>'required']);
        Ingrediente::create($request->all());
        return redirect()->route('ingredientes.index')->with('success','Ingrediente criado');
    }

    public function edit(Ingrediente $ingrediente){ return view('ingredientes.edit', compact('ingrediente')); }

    public function update(Request $request, Ingrediente $ingrediente)
    {
        $request->validate(['nome'=>'required']);
        $ingrediente->update($request->all());
        return redirect()->route('ingredientes.index')->with('success','Ingrediente atualizado');
    }

    public function destroy(Ingrediente $ingrediente){ $ingrediente->delete(); return redirect()->route('ingredientes.index')->with('success','Ingrediente excluído'); }
}
