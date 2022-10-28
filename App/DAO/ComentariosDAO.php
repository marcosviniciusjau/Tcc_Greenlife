<?php

namespace App\DAO;
use App\Model\UsuarioModel;
class UsuarioDAO extends DAO
{
    /**
     * Cria uma novo objeto para fazer o CRUD dos Usuário
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retorna um registro específico da tabela Grupo de Usuário
     */
    public function getById($id) 
    {

        $stmt = $this->conexao->prepare("SELECT * FROM usuario WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();            
    }


    /**
     * Retorna todos os registros da tabela 
     */
    public function getAllRows() 
    {
        $sql = "SELECT id, nome, comentarios  FROM usuario";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * Método que insere uma categoria na tabela Categoria.
     */
   
   

    

    
}