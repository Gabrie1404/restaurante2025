<!doctype html><html><head><meta charset="utf-8"><title>Encomenda {{ $encomenda->id }}</title></head><body>
<h1>Encomenda #{{ $encomenda->id }}</h1>
<p><strong>Cliente:</strong> {{ $encomenda->cliente->nome }}</p>
<p><strong>Endereço:</strong> {{ $encomenda->cliente->endereco }}</p>
<p><strong>Telefone:</strong> {{ $encomenda->cliente->telefone }}</p>
<p><strong>Data:</strong> {{ $encomenda->data }}</p>

<h3>Itens</h3>
<table border="1" cellpadding="6">
<tr><th>Prato</th><th>Qtd</th><th>Preço unit.</th><th>Subtotal</th></tr>
@foreach($encomenda->pratos as $p)
<tr>
    <td>{{ $p->nome }}</td>
    <td>{{ $p->pivot->quantidade }}</td>
    <td>R$ {{ number_format($p->pivot->preco_unitario,2,',','.') }}</td>
    <td>R$ {{ number_format($p->pivot->quantidade * $p->pivot->preco_unitario,2,',','.') }}</td>
</tr>
@endforeach
</table>
<p><strong>Total:</strong> R$ {{ number_format($encomenda->total,2,',','.') }}</p>
<a href="{{ route('encomendas.index') }}">Voltar</a>
</body></html>
