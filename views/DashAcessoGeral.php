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
            <div class="col-md-5 mb-3">
                <div class="card text-center">
                <img class="card-img-top" src="../assets/img/cliente.png">
                    <div class="card-body">
                        <!-- <i class="fa-xl fa-solid fa-people-carry-box"></i> -->
                        <h2 class="card-text">Clientes.</h2>
                        <a href="cadCliente.php" class="btn btn-success">Cadastrar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Consultar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Alterar</a>
                        <a href="./views/listAluno.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-5 mb-3">
                <div class="card text-center">
                    <img class="card-img-top" src="../assets/img/entregador.jpg">
                    <div class="card-body">
                        <!-- <i class="fa-xl fa-solid fa-people-carry-box"></i> -->
                        <h2 class="card-title">Fornecedores</h2>
                        <a href="./views/cadAluno.php" class="btn btn-success">Cadastrar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Consultar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Alterar</a>
                        <a href="./views/listAluno.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-5 mb-3">
                <div class="card text-center">
                    <img class="card-img-top" src="../assets/img/checklist.jpg">
                    <div class="card-body">
                        <!-- <i class="fa-xl fa-solid fa-clipboard-list"></i> -->
                        <h2 class="card-title">Ordem Serviço</h2>
                        <a href="./views/cadAluno.php" class="btn btn-success">Cadastrar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Consultar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Alterar</a>
                        <a href="./views/listAluno.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-5 mb-3">
                <div class="card text-center">
                    <img class="card-img-top" src="../assets/img/servico.jpg">
                    <div class="card-body">
                        <!-- <i class="fa-xl fa-sharp-duotone fa-solid fa-gears"></i> -->
                        <h2 class="card-title">Produtos / Serviços</h2>
                        <a href="./views/cadAluno.php" class="btn btn-success">Cadastrar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Consultar</a>
                        <a href="./views/listAluno.php" class="btn btn-success">Alterar</a>
                        <a href="./views/listAluno.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="../views/DashAcessoGeral.php" class="btn btn-info">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-..." crossorigin="anonymous"></script>

</body>

</html>