<?php
require_once '../config/database.php';
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
$stmt->execute([$email, $senha]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['user_id'] = $user['id'];
    header('Location: /area-protegida.php');
    exit();
} else {
    echo "E-mail ou senha inválidos!";
}