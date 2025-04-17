    <?php

    session_start();
    include 'conexao_Db.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    // consulta utilizando PDO, buscando pelo nome
    $sql = "SELECT * FROM usuarios WHERE nome = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    $usuarioDb = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha , $usuarioDb['senha'])) {
        $_SESSION['usuario'] = $usuario['nome'];
        header('Location: index.php');
        exit;
    } else {
        echo "Usuário ou senha indefinida";
    }

    ?>