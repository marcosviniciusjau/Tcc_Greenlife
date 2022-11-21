<?php

namespace App\DAO;
use App\Model\UsuarioModel;
class UsuarioDAO extends DAO
{
    
    public function __construct()
    {
        parent::__construct();
    }


    public function getById($id) 
    {

        $stmt = $this->conexao->prepare("SELECT * FROM usuario WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();            
    }


    public function getAllRows() 
    {
        $sql = "SELECT id, nome_usuario, email , senha, foto_perfil  FROM usuario";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

   
    public function insert(UsuarioModel $model)
   
    {
        $sql = "INSERT INTO usuario (nome_usuario, email, senha) VALUES (?, ?, sha1(?))";


      
  $stmt = $this->conexao->prepare($sql);



        $stmt->bindValue(1, $model->nome_usuario);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
       
        $stmt->execute();
   
    }

  public function update(UsuarioModel $model)
    {
        $sql = "UPDATE usuario SET nome_usuario=?, email=?,senha=sha1(?) , foto_perfil=? where id=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome_usuario);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->foto_perfil);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }


    public function delete($id) 
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }


    
    public function getMyUserById($id) 
    {
        $stmt = $this->conexao->prepare("SELECT id, nome_usuario, email, senha,foto_perfil FROM usuario WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();            
    }

    public function checkUserByIdAndPassword($id, $senha)
    {
        $stmt = $this->conexao->prepare("SELECT id FROM usuario WHERE id = ? AND senha = sha1(?)");
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function checkDuplicateEmail($email, $id_usuario)
    {
        $stmt = $this->conexao->prepare("SELECT id FROM usuario WHERE email = ?");
        $stmt->bindValue(1, $email);
        $stmt->execute();

        $dados = $stmt->fetchObject();

        if(is_object($dados))
        {
            if($id_usuario == $dados->id)
                return false;
            else  
                return true;
        } else
            return false;
    }

    
}