<!doctype html>
<html>
<head><meta charset="utf-8"><title>Clientes</title></head>
<body>
<h1>Clientes</h1>
<a href="{{ route('clientes.create') }}">Novo Cliente</a>
@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
<table border="1" cellpadding="6">
    <tr><th>Nome</th><th>Endereço</th><th>Telefone</th><th>Ações</th></tr>
    @foreach($clientes as $c)
    <tr>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->endereco }}</td>
        <td>{{ $c->telefone }}</td>
        <td>
            <a href="{{ route('clientes.edit', $c->id) }}">Editar</a>
            <form action="{{ route('clientes.destroy', $c->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Excluir?')">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $clientes->links() }}
</body>
</html>
