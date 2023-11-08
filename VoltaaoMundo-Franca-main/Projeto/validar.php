<?php

require_once 'classes/Usuario.php';

$id = $_GET['id'];
$status = $_GET['status'];

$aluno = new Usuario($id);
?>
