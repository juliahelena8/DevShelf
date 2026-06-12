<?php
require_once '../config/database.php';
session_start();

if (isset($_POST['id'], $_POST['nome'], $_POST['email'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    try {
        $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
        $stmt->execute([$nome, $email, $id]);

        $_SESSION['mensagem'] = "Usuário atualizado com sucesso!";
        header("Location: listar_usuarios.php");
        exit();

    } catch (Exception $e) {
        $_SESSION['mensagem'] = "Erro ao atualizar: " . $e->getMessage();
        header("Location: editar_usuario.php?id=" . $id);
        exit();
    }
    
} else {
    $_SESSION['mensagem'] = "Dados incompletos!";
    header("Location: editar_usuario.php?id=" . $_POST['id']);
    exit();
}
?>