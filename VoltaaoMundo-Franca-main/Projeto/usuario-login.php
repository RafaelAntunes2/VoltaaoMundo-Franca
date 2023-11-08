<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM v_usuario WHERE usuario='{$usuario}' AND senha='{$senha}'";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=volta-mundo','root', '');
$resultado = $conexao->query($sql);
$linha = $resultado->fetch();
$usuario_logado = $linha['usuario'];

if($usuario_logado == null){
    //Usuário ou senha inválida
    header('location: usuario-erro.php');
}
else{
    session_start();
    $_SESSION['usuario_logado'] = $usuario_logado;
    header('Location: index2.php');
}
?>
