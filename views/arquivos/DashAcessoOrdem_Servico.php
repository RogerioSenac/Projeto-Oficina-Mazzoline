<?php
include("../conexao.php");
include("../includes/header.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Mecanica Mazzoline</title>
</head>

<body>
 
    <div class="etiqueta">
        <h1>Controle de Registro de Ordem de Serviços</h1>
    </div>

    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-xl fas fa-user-graduate card-icon"></i>
                        <h5 class="card-title">Incluir</h5>
                        <!-- <p class="card-text">Incluir registro.</p> -->
                        <a href="inserirOrdem.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-person-booth"></i>
                        <h5 class="card-title">Atualizar</h5>
                        <!-- <p class="card-text">Atualizar registro.</p> -->
                        <a href="menuatualizarOrdem.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-street-view"></i>
                        <h5 class="card-title">Consulta</h5>
                        <!-- <p class="card-text">Ordem Serviço.</p> -->
                        <a href="menuvisualizarOrdem.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-xl fa-sharp fa-solid fa-user-slash"></i>
                        <h5 class="card-title">Cancelamentos</h5>
                        <!-- <p class="card-text">Cancelar registro.</p> -->
                        <a href="menuapagarOrdem.php" class="btn btn-danger">Acessar</a>
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