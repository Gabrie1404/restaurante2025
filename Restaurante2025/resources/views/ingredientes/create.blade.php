<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Ingrediente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="mb-4 text-center">➕ Cadastrar Novo Ingrediente</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <!-- Formulário de cadastro -->
                <form action="{{ route('ingredientes.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Ingrediente</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Ex: Farinha de trigo" required>
                    </div>

                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade em Estoque</label>
                        <input type="number" step="0.01" name="quantidade" id="quantidade" class="form-control" placeholder="Ex: 10.5" required>
                    </div>

                    <div class="mb-3">
                        <label for="unidade" class="form-label">Unidade de Medida</label>
                        <select name="unidade" id="unidade" class="form-select" required>
                            <option value="">Selecione...</option>
                            <option value="kg">Quilograma (kg)</option>
                            <option value="g">Grama (g)</option>
                            <option value="L">Litro (L)</option>
                            <option value="ml">Mililitro (ml)</option>
                            <option value="un">Unidade (un)</option>
                        </select>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Salvar Ingrediente</button>
                        <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
