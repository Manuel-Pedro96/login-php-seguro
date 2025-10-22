<?php
require 'includes/auth.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css"> </head>
<body>
    <div class="container dashboard-container">
        <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION["user_nome"]); ?>!</h2>
        <p>Você está autenticado com sucesso.</p>

        <a href="logout.php">Sair</a>

        </div> </body>
</html>