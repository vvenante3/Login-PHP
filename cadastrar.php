<?php

include 'conexao.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST["nome"];
    $email  = $_POST["email"];
    $senha  = password_hash($_POST["senha"], PASSWORD_DEFAULT); //criptografia de senha

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->execute([
            ':nome'     => $nome,
            ':email'    => $email,
            ':senha'    => $senha
        ]);
        $message = "Usuário cadastrado com sucesso!!";
    } catch (PDOException $e) {
        $message = "Erro: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <?php if ($message): ?>
        <p><strong><?= $message ?></strong></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>