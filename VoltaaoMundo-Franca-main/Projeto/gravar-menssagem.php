<?php
require_once "classes/Usuario.php";

$comentario= new Usuario();

$comentario ->nome = $_POST['nome'];

$comentario->email = $_POST['email'];

$comentario ->menssagem = $_POST['menssagem'];

$comentario ->statu = 'nao respondido';

$comentario -> inserir();

?>