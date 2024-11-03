<?php
session_start();
include ("../conexao.php");

if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$query = $conexao->query("SELECT * FROM ordem_servico");
$ordens = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Ordens de Serviço</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Abertura</th>
            <th>Hora</th>
            <th>Descrição</th>
            <th>Situação</th>
        </tr>
        <?php foreach ($ordens as $ordem): ?>
        <tr>
            <td><?php echo $ordem['idOrdem']; ?></td>
            <td><?php echo $ordem['data_criacao']; ?></td>
            <td><?php echo $ordem['hora-criacao']; ?></td>
            <td><?php echo $ordem['descricao']; ?></td>
            <td><?php echo $ordem['situacao']; ?></td>>
            <td><a href="consulta_detalhes_ordem.php?id=<?php echo $ordem['id']; ?>">Ver detalhes</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="logout.php">Sair</a>
</body>
</html>
