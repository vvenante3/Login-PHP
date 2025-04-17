<?php

    session_start();
    if(!isset($_SESSION['usuario']));
        header('Location: login.html');
        exit;

    include 'conexao.php';

    $sql = 'SELECT * FROM usuarios';
    $result = $conn->query($sql);

    echo "<h2>Usuários Cadastrados</h2>";
    echo "<table border='1'
    <tr><th>ID</th><th>Nome</th><th>Email</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nome']."</td>
                <td>".$row['email']."</td>
            <tr>";
    }

    echo "</table>";
    echo '<br><a href=index.php">Voltar</a>';

?>