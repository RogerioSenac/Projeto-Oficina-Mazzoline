<?php 
include("conexao.php");
$id = $_GET['id'];

$buscarOrdem = $conexao->prepare("SELECT * FROM ordem_servico WHERE id=?");
$buscarOrdem->execute([$id]);
$ordem = $buscarOrdem->fetch(PDO::FETCH_ASSOC);


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $cliente = $_POST['cliente'];
    $veiculo = $_POST['veiculo'];
    $servico = $_POST['servico'];
    $valor = $_POST['valor'];
    $status = $_POST['status'];

    $atualizar=$conexao->prepare("UPDATE ordem_servico SET cliente=?,veiculo=?,servico=?,valor=?,status=? WHERE id=?");

    $atualizar->execute([$cliente, $veiculo, $servico, $valor, $status, $id]);

    header('Location: index.php');

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Oficina Senac - Atualizar Ordem de Serviço</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Editar Ordem de Servico</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="cliente"class="form-label">Cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" value="<?php echo htmlspecialchars($ordem['cliente']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="veiculo"class="form-label">Veiculo</label>
                <input type="text" class="form-control" id="veiculo" name="veiculo" value="<?php echo htmlspecialchars($ordem['veiculo']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="servico"class="form-label">Servico</label>
                <input type="text" class="form-control" id="servico" name="servico" value="<?php echo htmlspecialchars($ordem['servico']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="valor"class="form-label">Valor</label>
                <input type="number" step="0.01" class="form-control" id="valor" name="valor" value="<?php echo htmlspecialchars($ordem['valor']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="status"class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Pendente" <?php $ordem['status']=='Pendente'? 'selected':''?>>Pendente</option>

                    <option value="Em Andamento" <?php $ordem['status']=='Em Andamento'? 'selected':''?>>Em Andamento</option>

                    <option value="Concluido" <?php $ordem['status']=='Concluido'? 'selected':''?>>Concluido</option>
                </select>
            </div>
            <button type="submit" class="btn bnt-warning">Atualizar</button>

            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>