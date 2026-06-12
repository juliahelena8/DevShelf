<?php
require_once '../config/database.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);

        header("Location: listar_usuarios.php");
        exit();
    } catch (Exception $e) {
        echo "Erro ao deletar: " . $e->getMessage();
    }
} else {
    header("Location: listar_usuarios.php");
    exit();
}
?>