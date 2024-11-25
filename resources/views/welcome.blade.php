<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina CRUD</title>
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
    </style>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="text-center">
            <h1 class="display-3">Oficina CRUD</h1>
            <p class="lead">Gerencie seus orçamentos de forma prática e eficiente.</p>
        </header>

        <!-- Botões -->
        <div class="text-center mt-4">
            <a href="{{ route('orcamentos.index') }}" class="btn btn-primary btn-lg">Ver Orçamentos</a>
            <a href="{{ route('orcamentos.create') }}" class="btn btn-success btn-lg ml-3">Criar Orçamento</a>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
