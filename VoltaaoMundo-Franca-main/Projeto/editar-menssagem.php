<?php

require_once 'classes/Usuario.php';

$id = $_GET['id'];

$disc = new Usuario($id);
?>

<!DOCTYPE html>
<html lang = "pt_br">
<head>  </head>
<body>
    <h1> Sistema Academico</h1>
    <h3> Nova turma </h3>
    <form action ="alterar-menssagem.php"method="POST">
        <input type = "hidden" name="id" value="<?=$disc->id?>">
        <label for= "statu">ID:</label>
        <input type = "text" name="statu" value="<?=$disc->statu?>">
        <br><br>
        <input type = "submit" value="Alterar">


</form>
</body>
