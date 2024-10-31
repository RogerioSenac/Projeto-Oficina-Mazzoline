<?php
include ("conexao.php");

//Busca as Ordens de Serviços
$buscaOrdem = $conexao->query("SELECT * from ordem_servico ORDER BY data_criacao DESC");

//Mostrar as Ordens de Serviços
$mostrarOrdem = $buscaOrdem->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Oficina Senac - Ordens de Serviços</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Controle de Ordens de Serviços</h1>
        <!-- Inserindo botao -->
        <a href="Inserir.php" class="btn btn-success mb-3">Nova Ordem de serviço</a>

        <!--Criar Tabela -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Veiculo</th>
                    <th>Serviço</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
                <?php foreach ($mostrarOrdem as $ordem): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ordem['id']) ?></td>
                        <td><?php echo htmlspecialchars($ordem['cliente']) ?></td>
                        <td><?php echo htmlspecialchars($ordem['veiculo']) ?></td>
                        <td><?php echo htmlspecialchars($ordem['servico']) ?></td>
                        <td><?php echo htmlspecialchars($ordem['valor']) ?></td>
                        <td><?php echo htmlspecialchars($ordem['status']) ?></td>
                        <td>
                            <a href="visualizar.php?id=<?php echo $ordem['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                            <a href="atualizar.php?id=<?php echo $ordem['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="apagar.php?id=<?php echo $ordem['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</body>

</html>