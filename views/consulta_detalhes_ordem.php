<?php
session_start();
include ("../conexao.php");

if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['idOrdem'];
$query = $conexao->prepare("SELECT * FROM itens_ordem_servico WHERE idOrdem = ?");
$query->execute([$id]);
$itens = $query->fetchAll(PDO::FETCH_ASSOC);

$query_ordem = $conexao->prepare("SELECT * FROM ordem_servico WHERE id = ?");
$query_ordem->execute([$id]);
$ordem = $query_ordem->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Detalhes da Ordem</title>
</head>

<body>
    <h1>Detalhes da Ordem de Serviço - ID: <?php echo $ordem['id']; ?></h1>
    <p>Descrição: <?php echo $ordem['descricao']; ?></p>

    <h2>Itens</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Item/serviço</th>
            <th>Quantidade</th>
            <th>Vl. Unitário</th>
            <th>Vl. Total</th>
        </tr>
        <?php foreach ($itens as $item): ?>
            <tr>
                <td><?php echo $item['idItem']; ?></td>
                <td><?php echo $item['descricao']; ?></td>
                <td><?php echo $item['qtd']; ?></td>
                <td><?php echo $item['vlUnit']; ?></td>
                <td><?php echo $item['vlTotal']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="dashboard.php">Voltar</a>
    <a href="logout.php">Sair</a>
</body>

</html>