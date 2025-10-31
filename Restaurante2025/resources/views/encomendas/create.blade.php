<!doctype html><html><head><meta charset="utf-8"><title>Nova Encomenda</title></head><body>
<h1>Nova Encomenda</h1>
<form action="{{ route('encomendas.store') }}" method="POST">
    @csrf
    Cliente:<br>
    <select name="cliente_id">
        @foreach($clientes as $c)
            <option value="{{ $c->id }}">{{ $c->nome }} - {{ $c->telefone }}</option>
        @endforeach
    </select><br><br>

    Data:<br><input type="date" name="data" value="{{ date('Y-m-d') }}"><br><br>

    <h3>Itens (prato + quantidade)</h3>
    <div id="itens">
        <div>
            <select name="items[0][prato_id]">
                @foreach($pratos as $p)
                    <option value="{{ $p->id }}">{{ $p->nome }} — R$ {{ number_format($p->preco_unitario,2,',','.') }}</option>
                @endforeach
            </select>
            Qtd: <input type="number" name="items[0][quantidade]" value="1" min="1">
        </div>
    </div>
    <button type="button" onclick="addItem()">Adicionar outro item</button><br><br>

    <button type="submit">Salvar Encomenda</button>
</form>

<script>
let idx = 1;
function addItem(){
    const container = document.getElementById('itens');
    const html = `<div>
        <select name="items[${idx}][prato_id]">
            @foreach($pratos as $p)
                <option value="{{ $p->id }}">{{ $p->nome }} — R$ {{ number_format($p->preco_unitario,2,',','.') }}</option>
            @endforeach
        </select>
        Qtd: <input type="number" name="items[${idx}][quantidade]" value="1" min="1">
    </div>`;
    container.insertAdjacentHTML('beforeend', html);
    idx++;
}
</script>

<a href="{{ route('encomendas.index') }}">Voltar</a>
@if($errors->any())<div style="color:red">@foreach($errors->all() as $e) <p>{{ $e }}</p> @endforeach</div>@endif
</body></html>
