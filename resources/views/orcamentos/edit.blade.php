<!-- resources/views/orcamentos/edit.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Orçamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f0e1; /* Cor de fundo suave em tons de ocre */
            color: #3e3e3e;
        }
        header {
            background-color: #d79e41; /* Cor de fundo do cabeçalho em tom ocre */
            color: white;
            padding: 20px 0;
            border-radius: 8px;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="text-center">
            <h1 class="display-3">Editar Orçamento</h1>
            <p class="lead">Edite os detalhes do orçamento abaixo.</p>
        </header>

        <!-- Formulário de Edição -->
        <form action="{{ route('orcamentos.update', $orcamento->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Especifica que o método é PUT para a atualização -->
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente:</label>
                <input type="text" class="form-control" id="cliente" name="cliente" value="{{ $orcamento->cliente }}" required>
            </div>
            <div class="mb-3">
                <label for="vendedor" class="form-label">Vendedor:</label>
                <input type="text" class="form-control" id="vendedor" name="vendedor" value="{{ $orcamento->vendedor }}" required>
            </div>
            <div class="mb-3">
                <label for="valor_orcado" class="form-label">Valor:</label>
                <input type="number" class="form-control" id="valor_orcado" name="valor_orcado" value="{{ $orcamento->valor_orcado }}" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="data_hora" class="form-label">Data:</label>
                <input type="datetime-local" class="form-control" id="data_hora" name="data_hora" value="{{ \Carbon\Carbon::parse($orcamento->data_hora)->format('Y-m-d\TH:i') }}" required>
            </div>
            <button type="submit" class="btn btn-warning btn-sm">Atualizar Orçamento</button>
        </form>
        <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-warning btn-lg">Voltar</a>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
