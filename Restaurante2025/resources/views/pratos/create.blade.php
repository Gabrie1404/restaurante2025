<!doctype html><html><head><meta charset="utf-8"><title>Novo Prato</title></head><body>
<h1>Novo Prato</h1>
<form action="{{ route('pratos.store') }}" method="POST">
    @csrf
    Nome:<br><input type="text" name="nome" value="{{ old('nome') }}"><br>
    Preço:<br><input type="text" name="preco_unitario" value="{{ old('preco_unitario') }}"><br>
    <button type="submit">Salvar</button>
</form>
<a href="{{ route('pratos.index') }}">Voltar</a>
@if($errors->any())<div style="color:red">@foreach($errors->all() as $e) <p>{{ $e }}</p> @endforeach</div>@endif
</body></html>
