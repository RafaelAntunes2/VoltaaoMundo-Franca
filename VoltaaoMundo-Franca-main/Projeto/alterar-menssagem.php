<?php
require_once "classes/Usuario.php";
$id = $_POST['id'];
$comentario = new Usuario($id);
$comentario->menssagem = $_POST['menssagem'];
$comentario->atualizar();
header('Location: ler-menssagem.php');

?>
