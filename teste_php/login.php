<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['cpf'];
    $cpf = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE cpf = :cpf";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':cpf' => $cpf]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        echo "Login bem-sucedido! Bem-vindo, " . $usuario['nome'];
        // Aqui você pode usar sessions, redirecionamentos, etc.
    } else {
        echo "Email ou senha inválidos.";
    }
}
?>

<form method="POST">
    Email: <input type="cpf" name="cpf"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit">Entrar</button>
</form>
