<?php
require 'db.php';

$message = "";
$message_class = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
    if ($stmt->execute([$nome, $email, $senha])) {
        $message = "Usuário registrado com sucesso! <a href='index.php'><br>Fazer login</a>";
        $message_class = "success";
    } else {
        $message = "Erro ao registrar.";
        $message_class = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Usuário</h2>
        
        <?php if ($message): ?>
            <p class="message <?php echo $message_class; ?>"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            
            <button type="submit">Registrar</button>
        </form>
        
        <p class="auth-link">Já tem uma conta? <a href="index.php">Fazer login</a></p>
    </div>
</body>
</html>