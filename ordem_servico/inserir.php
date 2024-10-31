<?php 
include ("conexao.php");

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $cliente = $_POST['cliente'];
    $veiculo = $_POST['veiculo'];
    $servico = $_POST['servico'];
    $valor = $_POST['valor'];
    
    $novaOrdem = $conexao->prepare("INSERT INTO ordem_servico (cliente,veiculo,servico,valor) VALUES (?,?,?,?)");

    $novaOrdem->execute([$cliente,$veiculo,$servico,$valor]);

    header('Location: ordem.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Oficina Senac - Nova Ordem de Serviço</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Nova Ordem de Serviço</h1>
        <form method="POST">
            <div class="mb-3">
                <label form="cliente"class="form-label">Cliente</label>
                <input type="text" class="form-control" id="cliente"name="cliente" required>
            </div>
            <div class="mb-3">
                <label form="veiculo"class="form-label">Veiculo</label>
                <input type="text" class="form-control" id="veiculo"name="veiculo" required>
            </div>
            <div class="mb-3">
                <label form="servico"class="form-label">Serviço</label>
                <input type="text" class="form-control" id="servico"name="servico" required>
            </div>
            <div class="mb-3">
                <label form="valor"class="form-label">Valor</label>
                <input type="number" step="0.01" class="form-control" id="valor"name="valor" required>
            </div>
            <div class="mb-3">
                <button type="submite" class="btn btn-success">Gravar</button>
                <a href="index.php"class="btn btn-secondary">Voltar</a>     
            </div>
        </form>
    </div>
</body>
</html>