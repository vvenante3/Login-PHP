<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
    exit;
}

?>

<h1>Bem-Vindo, <?php echo $_SESSION['usuario']; ?></h1>
<a href="usuarios.php">Ver usuários cadastrados</a> |
<a href="logout.php">Sair</a>