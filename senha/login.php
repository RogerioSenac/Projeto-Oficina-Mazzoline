<?php
include("../conexao.php");
session_start(); // Inicia a sessão

// Lógica de login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $usuario = trim($_POST['usuario']);
    $senha = $_POST['senhaUsuario'];

    $stmt = $conexao->prepare("SELECT * FROM acessos WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senhaUsuario'])) {
        $_SESSION['usuario'] = $user['usuario'];

        // Redireciona com base no tipo de usuário
        if ($user['usuario'] === 'admin') {
            header("Location: ../views/DashAcessoGeral.php");
        } else {
            header("Location: ../views/DashAcessoClientes.php");
        }
        exit();
    } else {
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
}

// Lógica de cadastro
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadastro'])) {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];
    $nome = trim($_POST['nomeCompleto']);
    $usuario = trim($_POST['usuario']);

    // Validação
    if (empty($email) || empty($senha) || empty($nome) || empty($usuario)) {
        header("Location: login.php?error=empty_fields");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.php?error=invalid_email");
        exit();
    }

    // Verificar se o nome já existe
    $stmt = $conexao->prepare("SELECT * FROM acessos WHERE nomeUsuario = :nome");
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: login.php?error=name_exists");
        exit();
    }

    // Hash da senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        // Inserir novo usuário
        $stmt = $conexao->prepare("INSERT INTO acessos (emailUsuario, senhaUsuario, nomeUsuario, usuario) VALUES (?, ?, ?, ?)");
        $stmt->execute([$email, $senhaHash, $nome, $usuario]);

        header("Location: login.php?success=registration_successful");
        exit();
    } catch (PDOException $e) {
        header("Location: login.php?error=" . urlencode($e->getMessage()));
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mecanica Mazzoline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <h3>Mecanica Mazzoline</h3>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Login</h1>
    <?php if (isset($_GET['error'])): ?>
        <div><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>

    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário:</label>
            <input type="text" name="usuario" required>
        </div>
        <div class="mb-3">
            <label for="senhaUsuario" class="form-label">Senha:</label>
            <input type="password" name="senhaUsuario" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Logar</button>
        </div>
    </form>


    <!-- Registration Form -->

    <h2>Cadastro</h2>
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="nomeCompleto" class="form-label">Nome Completo:</label>
            <input type="text" name="nomeCompleto" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário:</label>
            <input type="text" name="usuario" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" name="senha" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>


</body>

</html>