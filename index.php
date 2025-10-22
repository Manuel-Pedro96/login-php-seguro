<?php
session_start();
require 'db.php';


$message = "";
$message_class = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user["senha"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_nome"] = $user["nome"];
        header("Location: dashboard.php");
        exit;
    } else {
       $message = "Email ou senha incorretos.";
        $message_class = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> </head>
<body>
    <div class="container">
        <h2>Login</h2>

            <?php if ($message): ?>
            <p class="message <?php echo $message_class; ?>"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>

        <form method="POST">
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>
            <label>Senha:</label><br>
            <input type="password" name="senha" required><br><br>
            <button type="submit">Entrar</button>
        </form>

        <p><a href="register.php">Registrar novo usuário</a></p>

        </div> </body>
</html>
