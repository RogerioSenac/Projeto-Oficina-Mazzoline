<?php
include("../conexao.php");
include("../includes/headerbd.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styleOS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Mecanica Mazzoline</title>
</head>

<body>

    <div class="etiqueta">
        <h1>Controle de Registros</h1>
    </div>

    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-xl fa-solid fa-circle-user"></i>
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text">Registros</p>
                        <a href="../views/DashAcessoCliente.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-xl fa-solid fa-people-carry-box"></i>
                        <h5 class="card-title">Fornecedores</h5>
                        <p class="card-text">Registros</p>
                        <a href="../views/DashAcessoFornecedor.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-xl fa-solid fa-clipboard-list"></i>
                        <h5 class="card-title">Ordem Serviço</h5>
                        <p class="card-text">Registros</p>
                        <a href="../views/DashAcessoOrdem_Servico.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-xl fa-sharp-duotone fa-solid fa-gears"></i>
                        <h5 class="card-title">Produtos / Serviços</h5>
                        <p class="card-text">Registro.</p>
                        <a href="../views/DashAcessoProd_Serv.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="../views/DashAcessoGeral.php" class="btn btn-secondary">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-..." crossorigin="anonymous"></script>

</body>

</html>