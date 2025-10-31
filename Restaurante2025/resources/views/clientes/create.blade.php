<!doctype html>
<html><head><meta charset="utf-8"><title>Novo Cliente</title></head>
<body>
<h1>Novo Cliente</h1>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    Nome:<br><input type="text" name="nome" value="{{ old('nome') }}"><br>
    Endereço:<br><input type="text" name="endereco" value="{{ old('endereco') }}"><br>
    Telefone:<br><input type="text" name="telefone" value="{{ old('telefone') }}"><br>
    <button type="submit">Salvar</button>
</form>
<a href="{{ route('clientes.index') }}">Voltar</a>
@if($errors->any())<div style="color:red">@foreach($errors->all() as $e) <p>{{ $e }}</p> @endforeach</div>@endif
</body></html>
