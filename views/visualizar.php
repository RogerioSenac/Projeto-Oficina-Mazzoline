<?php
include("conexao.php");

$id=$_GET['id'];

$buscarOrdem = $conexao->prepare("SELECT * FROM ordem_servico WHERE id=?");
$buscarOrdem->execute([$id]);
$ordem = $buscarOrdem->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Oficina Senac - Visualizar Ordem de Servico</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Detalhes da Ordem de Serviço </h1>
        <p><strong>Cliente: </strong><?php echo htmlspecialchars($ordem['cliente']) ?></p>
        <p><strong>Veiculo: </strong><?php echo htmlspecialchars($ordem['veiculo']) ?></p>
        <p><strong>Serviço: </strong><?php echo htmlspecialchars($ordem['servico']) ?></p>
        <p><strong>Valor: </strong><?php echo htmlspecialchars($ordem['valor']) ?></p>
        <p><strong>Status: </strong><?php echo htmlspecialchars($ordem['status']) ?></p>
        <p><strong>Data de Criação: </strong><?php echo htmlspecialchars($ordem['data_criacao']) ?></p>

        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>