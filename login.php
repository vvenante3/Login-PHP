<?php

session_start();
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE nome = '$usuario' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php');
} else {
    echo "Usuário ou senha inválidos";
}
?>