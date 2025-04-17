<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
</head>
<body>

    <h1>Bem-Vindo, <?php echo $_SESSION['usuario']; ?></h1>
    <a href="usuarios.php">Ver usuários cadastrados</a> |
    <a href="logout.php">Sair</a>

</body>
</html>