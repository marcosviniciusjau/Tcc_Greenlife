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

   
    public function insert($dados)
    {
           $sql = "INSERT INTO usuario (comentarios) VALUES (?) where id=?";


         $stmt = $this->conexao->prepare($sql);
         $stmt->bindValue(1, $dados['comentarios']);

        $stmt->execute();
    }

  
    public function update(ComentariosModel $model)
    {
        $sql = "UPDATE usuario SET comentarios=?  ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->comentarios);
       
        $stmt->execute();
    }

    public function getAllRows() {
        
        $stmt = $this->conexao->prepare("SELECT comentarios FROM usuario");
        $stmt->execute();

       
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
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