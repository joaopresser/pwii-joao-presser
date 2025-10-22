<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE nome = :nome";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nome' => $nome]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        echo "Login bem-sucedido! Bem-vindo, " . $usuario['nome'];
        // Aqui você pode usar sessions, redirecionamentos, etc.
    } else {
        echo "Nome ou senha inválidos.";
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="cpf"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit">Entrar</button>
</form>
