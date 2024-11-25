<!-- resources/views/orcamentos/create.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Orçamento</title>
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
        .btn-primary {
            background-color: #d79e41; /* Cor do botão para a cor ocre */
            border-color: #d79e41;
        }
        .btn-primary:hover {
            background-color: #c77c1a; /* Cor mais escura no hover */
            border-color: #c77c1a;
        }
        .btn-success {
            background-color: #6e7d1c; /* Cor verde suave para o botão "Criar" */
            border-color: #6e7d1c;
        }
        .btn-success:hover {
            background-color: #57671a;
            border-color: #57671a;
        }
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        form button {
            background-color: #d79e41;
            border-color: #d79e41;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }
        form button:hover {
            background-color: #c77c1a;
            border-color: #c77c1a;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="text-center">
            <h1 class="display-3">Criar Novo Orçamento</h1>
            <p class="lead">Preencha os dados abaixo para criar um novo orçamento.</p>
        </header>

        <!-- Mensagem de sucesso -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulário para criar orçamento -->
        <form action="/orcamentos" method="POST">
            @csrf
            <div class="form-group">
                <label for="cliente">Cliente:</label>
                <input type="text" id="cliente" name="cliente" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="vendedor">Vendedor:</label>
                <input type="text" id="vendedor" name="vendedor" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="valor_orcado">Valor:</label>
                <input type="number" id="valor_orcado" name="valor_orcado" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="data_hora">Data:</label>
                <input type="datetime-local" id="data_hora" name="data_hora" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Criar Orçamento</button>
        </form>
        <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Voltar</a>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
