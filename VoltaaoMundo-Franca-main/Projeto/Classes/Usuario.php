<?php

class Usuario
{
    public $id;

    public $nome;

    public $email;

    public $menssagem;

    public $statu;





    public function inserir()
    {
        $sql = "INSERT INTO tb_alunos (nome,email,menssagem,statu) VALUES('".$this->nome."','".$this->email."','".$this->menssagem."','0')";
        include_once "classes/conexao.php";
        $conexao->exec($sql);
        echo "Registro gravado com sucesso!";

    }

    public function listar()
    {
        $sql = "SELECT *
                FROM v_fale ";

        include_once "classes/conexao.php";
        $resultado = $conexao->query($sql);
        $lista = $resultado->FetchAll();
        return $lista;
    }

}
