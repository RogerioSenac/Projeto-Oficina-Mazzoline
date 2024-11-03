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
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($_GET['error'])): ?>
        <div><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>
    
    <form action="login.php" method="post">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senhaUsuario" placeholder="Senha" required>
        <button type="submit" name="login">Entrar</button>
    </form>

    <h2>Cadastro</h2>
    <form action="login.php" method="post">
        <input type="text" name="nomeCompleto" placeholder="Nome Completo" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit" name="cadastro">Cadastrar</button>
    </form>
</body>
</html>