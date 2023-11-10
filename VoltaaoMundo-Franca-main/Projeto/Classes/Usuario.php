<?php

class Usuario
{
    public $id;

    public $nome;

    public $email;

    public $menssagem;

    public $statu;



    public function inserir(){
    $sql = "INSERT INTO v_fale (nome,email,menssagem,statu) VALUES(
        '".$this ->nome."',
         '".$this ->email."',
         '".$this ->menssagem."',
         '".$this ->statu."'
  
        
        )";
        include_once "classes/conexao.php";
        $conexao -> exec($sql);
        echo "registro gravado com sucesso";
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
    
    public function atualizar()
    {
        try {
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=volta-mundo', 'root', '');
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            if ($this->statu === 'nao respondido') {
                $this->statu = 'respondido';
            }
    
            $sql = "UPDATE v_fale SET statu = 'respondido' WHERE id = :id";
    
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
    
            echo "Registro atualizado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao atualizar registro: " . $e->getMessage();
        }
    }
    
    
    
    
}
    



