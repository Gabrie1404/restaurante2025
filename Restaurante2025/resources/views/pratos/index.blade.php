<!doctype html><html><head><meta charset="utf-8"><title>Pratos</title></head><body>
<h1>Pratos</h1>
<a href="{{ route('pratos.create') }}">Novo Prato</a>
@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
<table border="1" cellpadding="6">
<tr><th>Nome</th><th>Preço</th><th>Ações</th></tr>
@foreach($pratos as $p)
<tr>
    <td>{{ $p->nome }}</td>
    <td>R$ {{ number_format($p->preco_unitario,2,',','.') }}</td>
    <td>
        <a href="{{ route('pratos.edit', $p->id) }}">Editar</a>
        <form action="{{ route('pratos.destroy', $p->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE') <button onclick="return confirm('Excluir?')">Excluir</button>
        </form>
    </td>
</tr>
@endforeach
</table>
{{ $pratos->links() }}
</body></html>
