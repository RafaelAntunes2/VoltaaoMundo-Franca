<?php

require_once "Classes/Usuario.php";

$disc = new Usuario();

$lista = $disc->listar();

?>
<html lang = "pt_br">
    <head>
        <meta charset="utf-8">
        <title>Mural de menssagens</title>

    </head>
    <body>
        <h1>Menssagens</h1>
        <h3>Mural de menssagens</h3>
        <table Border="1">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Menssagem</th>
                <th>Status</th>

            </tr>

<?php foreach ($lista as $linha): ?>
    <td><?php echo $linha['id']?></td>
    <td><?php echo $linha['nome']?></td>
    <td><?php echo $linha['email']?></td>
    <td><?php echo $linha['menssagem']?></td>
    <td><?php echo $linha['statu']?></td>

    <a href="Disciplina-editar.php?id=<?= $linha['ID']?>">Marcar como lida</a>

</td>
</tr>
<?php endforeach ?>

        </table>

    </body>

</html>
