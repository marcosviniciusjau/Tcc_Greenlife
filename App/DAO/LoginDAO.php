<?php

namespace App\DAO;
use \PDO;

class LoginDAO extends DAO
{
  
    public function __construct()
    {
       
        parent::__construct();       
    }

    public function setNewPassWordForUserByEmail($email, $novasenha)
    {
        $sql = "UPDATE usuario SET senha= sha1(?) WHERE email=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $novasenha);
        $stmt->bindValue(2, $email);
        $stmt->execute();
    }
    
    public function getByEmailAndUsuario($email, $tipo_usuario)
    {
        $sql = "SELECT u.id, u.email

        FROM usuario u WHERE u.email=? AND u.tipo_usuario = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $tipo_usuario);
        $stmt->execute();

        $dados_usuario = $stmt->fetchObject();

      
         return $dados_usuario;
    }


    
}