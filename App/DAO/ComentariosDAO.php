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

   
    public function insert( ComentariosModel $model)
    {
        
           $sql = "INSERT INTO comentarios (descricao,id_usuario) VALUES (?,?)";


           $stmt = $this->conexao->prepare($sql);
          
           $stmt->bindValue(1, $model->descricao);
           $stmt->bindValue(2, $model->id_usuario);
           
        $stmt->execute();
    }



    public function update(ComentariosModel $model)
    {
        $sql = "UPDATE comentarios SET descricao=?  where id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(1, $model->id_comentarios);
       
        $stmt->execute();
    }

    public function getAllRows() {
        
        $stmt = $this->conexao->prepare("SELECT descricao FROM comentarios");
        $stmt->execute();

       
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

  
    public function getAllRowsComentarios() 
    {
        $sql = "SELECT usuario.nome_usuario,usuario.foto_perfil, comentarios.descricao FROM usuario INNER JOIN comentarios
        ON usuario.id_comentarios = comentarios.id
        ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    public function getById($id)
    {
        try 
        {
            $stmt = $this->conexao->prepare("SELECT * FROM comentarios WHERE id = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject('App\Model\ComentariosModel');

        } catch (PDOException $e) {
            
            throw new Exception("Erro ao obter o produto no banco de dados.");
        }
    }
   
    public function selectById(int $id_usuario)
    {


        $sql = "SELECT * FROM comentarios WHERE id_usuario = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_usuario);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\CosmeticosModel"); 
    }

   
    public function delete(int $id)
    {
        $sql = "DELETE FROM comentarios WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}