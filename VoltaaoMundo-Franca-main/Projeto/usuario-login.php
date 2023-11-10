<?php
session_start();
require_once 'usuario-verifica.php';

$nome = $_POST['usuario'];
$senhaLimpa = $_POST['senha'];
$senha = md5($senhaLimpa); // Ou use password_hash se preferir

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=volta-mundo', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM v_usuario WHERE usuario = :user AND senha = :password";
    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':user', $nome);
    $resultado->bindParam(':password', $senha);
    $resultado->execute();
    $linha = $resultado->fetch();

    if ($linha) {
        $_SESSION['nome'] = $linha['nome'];
        header('location:ler-menssagem.php');
    } else {
        header('location:usuario-erro.php');
    }
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>





