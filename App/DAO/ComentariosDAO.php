<?php

namespace App\DAO;
use App\Model\ComentariosModel;
use PDO;
class ComentariosDAO extends DAO
{
    /**
     * Cria uma novo objeto para fazer o CRUD dos Usuário
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(ComentariosModel $model)
    {
           $sql = "INSERT INTO comentarios (comentarios) VALUES (?) ";

         $stmt = $this->conexao->prepare($sql);


         $stmt->bindValue(1, $model->comentarios);
      
        $stmt->execute();
    }


  
    public function update(ComentariosModel $model)
    {
        $sql = "UPDATE comentarios SET comentarios=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->comentarios);
       
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM comentarios ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


   
    public function selectById(int $id)
    {
        

        $sql = "SELECT * FROM comentarios WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
        return $stmt->fetchObject("App\Model\ComentariosModel"); 
    }


   
    public function delete(int $id)
    {
        $sql = "DELETE FROM comentarios WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}