<?php

namespace App\DAO;
use \PDO;

class LoginUsuarioDAO extends DAO
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
    
    public function getByEmailAndSenha($email, $senha)
    {
        $sql = "SELECT u.id, u.email,u.senha

        FROM usuario u WHERE u.email=? AND u.senha = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        $dados_usuario = $stmt->fetchObject();

      
         return $dados_usuario;
    }


    
}