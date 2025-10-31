<?php
namespace App\Http\Controllers;
use App\Models\Encomenda;
use App\Models\Cliente;
use App\Models\Prato;
use Illuminate\Http\Request;
use DB;

class EncomendaController extends Controller
{
    public function index()
    {
        $encomendas = Encomenda::with('cliente')->orderByDesc('created_at')->paginate(15);
        return view('encomendas.index', compact('encomendas'));
    }

    public function create()
    {
        $clientes = Cliente::orderBy('nome')->get();
        $pratos = Prato::orderBy('nome')->get();
        return view('encomendas.create', compact('clientes','pratos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id'=>'required|exists:clientes,id',
            'data'=>'nullable|date',
            'items'=>'required|array'
        ]);

        DB::transaction(function() use ($request) {
            $encomenda = Encomenda::create([
                'cliente_id'=>$request->cliente_id,
                'data'=>$request->data ?? now(),
                'total'=>0
            ]);

            $total = 0;
            foreach($request->items as $item){
                // item: ['prato_id'=>x,'quantidade'=>n]
                $prato = Prato::findOrFail($item['prato_id']);
                $qtd = intval($item['quantidade']);
                $lineTotal = $prato->preco_unitario * $qtd;
                $encomenda->pratos()->attach($prato->id, [
                    'quantidade'=>$qtd,
                    'preco_unitario'=>$prato->preco_unitario
                ]);
                $total += $lineTotal;
            }

            $encomenda->update(['total'=>$total]);
        });

        return redirect()->route('encomendas.index')->with('success','Encomenda criada');
    }

    public function show(Encomenda $encomenda)
    {
        $encomenda->load('cliente','pratos');
        return view('encomendas.show', compact('encomenda'));
    }

    public function destroy(Encomenda $encomenda)
    {
        $encomenda->delete();
        return redirect()->route('encomendas.index')->with('success','Encomenda excluída');
    }
}
