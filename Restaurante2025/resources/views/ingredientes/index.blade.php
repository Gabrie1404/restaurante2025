<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ingredientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="mb-4 text-center">🍅 Lista de Ingredientes</h1>

        <!-- Botão para adicionar novo ingrediente -->
        <div class="mb-3 text-end">
            <a href="{{ route('ingredientes.create') }}" class="btn btn-success">+ Novo Ingrediente</a>
        </div>

        <!-- Exibe mensagens de sucesso -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Tabela de ingredientes -->
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Quantidade em Estoque</th>
                            <th>Unidade de Medida</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ingredientes as $ingrediente)
                            <tr class="text-center">
                                <td>{{ $ingrediente->id }}</td>
                                <td>{{ $ingrediente->nome }}</td>
                                <td>{{ $ingrediente->quantidade }}</td>
                                <td>{{ $ingrediente->unidade }}</td>
                                <td>
                                    <a href="{{ route('ingredientes.edit', $ingrediente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    
                                    <form action="{{ route('ingredientes.destroy', $ingrediente->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Nenhum ingrediente cadastrado ainda.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-3 text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Voltar ao Início</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
