<?php
include("../includes/headerbd.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styleOS.css">
    <title>Mecanica Mazzoline</title>
</head>

<body>
    <div class="container mt-4">
        <h1>Cadastro de Cliente / Fornecedor</h1>
        <form action="../controllers/ClienteController.php?action=cadastrar" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-md-center">
                <div class="col col-lg-12">
                    <label for="nomeCli" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nomeCli" name="nomeCli" required>
                </div>
                <div class="col col-lg-6">
                    <label for="ruaCli" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="ruaCli" name="ruaCli" required>
                </div>
                <div class="col col-lg-6">
                    <label for="bairroCli" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairroCli" name="bairroCli" required>
                </div>
                <div class="col col-lg-4">
                    <label for="cidadeCli" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidadeCli" name="cidadeCli" required>
                </div>
                <div class="col col-lg-4">
                    <label for="estadoCli" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estadoCli" name="estadoCli" required>
                </div>
                <div class="col col-lg-4">
                    <label for="cepCli" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cepCli" name="cepCli" required>
                </div>
                <div class="col col-lg-6">
                    <label for="foneCli" class="form-label">Fone</label>
                    <input type="text" class="form-control" id="foneCli" name="foneCli" required>
                </div>
                <div class="col col-lg-6">
                    <label for="emailCli" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailCli" name="emailCli" required>
                </div>
                <div class="col col-lg-6">
                    <label for="tipoCli" class="form-label">Tipo Cliente</label>
                    <select class="form-control" id="tipoCli" name="tipoCli" required>
                        <option value="">Selecione...</option>
                        <option value="fisica">Pessoa Física</option>
                        <option value="juridica">Pessoa Jurídica</option>
                    </select>
                </div>
                <div class="col col-lg-6">
                    <label for="docCli" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="docCli" name="docCli" required>
                </div>
                <div class="col col-lg-12">
                    <label for="fotoCli" class="form-label">Foto do Cliente:</label>
                    <input type="file" class="form-control" id="fotoCli" name="fotoCli" accept="image/*" required>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success">Gravar Registro</button>
                    <a href="DashCli.php" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


