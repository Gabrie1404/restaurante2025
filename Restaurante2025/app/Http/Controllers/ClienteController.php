<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('nome')->paginate(15);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'endereco'=>'required',
            'telefone'=>'required'
        ]);
        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente criado');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome'=>'required',
            'endereco'=>'required',
            'telefone'=>'required'
        ]);
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente atualizado');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success','Cliente excluído');
    }
}
