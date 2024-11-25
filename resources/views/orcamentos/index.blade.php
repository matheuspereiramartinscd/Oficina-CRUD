<!-- resources/views/orcamentos/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamentos</title>
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
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #e0a800;
        }
        .container {
            margin-top: 50px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #d79e41;
            color: white;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="text-center">
            <h1 class="display-3">Lista de Orçamentos</h1>
            <p class="lead">Confira os orçamentos registrados.</p>
        </header>

        <!-- Tabela de Orçamentos -->
        <table>
            <thead>
                <tr>
                    <th>ID</th> <!-- Coluna para ID -->
                    <th>Cliente</th>
                    <th>Vendedor</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Ações</th> <!-- Coluna para Botões -->
                </tr>
            </thead>
            <tbody>
                @foreach ($orcamentos as $orcamento)
                    <tr>
                        <td>{{ $orcamento->id }}</td> <!-- Exibindo o ID -->
                        <td>{{ $orcamento->cliente }}</td>
                        <td>{{ $orcamento->vendedor }}</td>
                        <td>R$ {{ $orcamento->valor_orcado }}</td>
                        <td>{{ $orcamento->data_hora }}</td>
                        <td>
                            <!-- Botões de Editar e Excluir -->
                            <a href="{{ route('orcamentos.edit', $orcamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('orcamentos.destroy', $orcamento->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Botão para voltar à página inicial -->
        <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Voltar</a>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
