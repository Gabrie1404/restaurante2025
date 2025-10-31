<!doctype html><html><head><meta charset="utf-8"><title>Encomendas</title></head><body>
<h1>Encomendas</h1>
<a href="{{ route('encomendas.create') }}">Nova Encomenda</a>
@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
<table border="1" cellpadding="6">
<tr><th>ID</th><th>Cliente</th><th>Data</th><th>Total</th><th>Ações</th></tr>
@foreach($encomendas as $e)
<tr>
    <td>{{ $e->id }}</td>
    <td>{{ $e->cliente->nome }}</td>
    <td>{{ $e->data }}</td>
    <td>R$ {{ number_format($e->total,2,',','.') }}</td>
    <td>
        <a href="{{ route('encomendas.show', $e->id) }}">Ver</a>
        <form action="{{ route('encomendas.destroy', $e->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE') <button onclick="return confirm('Excluir?')">Excluir</button>
        </form>
    </td>
</tr>
@endforeach
</table>
{{ $encomendas->links() }}
</body></html>
