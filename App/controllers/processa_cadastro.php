<?php
require_once '../config/database.php';
session_start();

try {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); // Hash para segurança

    $stmt = $pdo->prepare("INSERT INTO usuario (email, senha, data_criacao) VALUES (?, ?, NOW())");
    $stmt->execute([$email, $senha]);

    $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
    header("Location: /DevShelf/index.php?p=cadastro-usuario");
    exit();
} catch (Exception $e) {
    $_SESSION['mensagem'] = "Erro no cadastro: " . $e->getMessage();
    header("Location: /DevShelf/index.php?p=cadastro-usuario");
    exit();
}
?>
