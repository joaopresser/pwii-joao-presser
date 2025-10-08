<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf']; 
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, idade, cpf, senha) VALUES (:nome, :idade, :cpf, :senha)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([':nome' => $nome, ':email' => $idade, ':cpf' => $cpf, ':senha' => $senha]);
        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="email" name="idade"><br>
    CPF: <input type="cpf" name="cpf"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit">Cadastrar</button>
</form>
