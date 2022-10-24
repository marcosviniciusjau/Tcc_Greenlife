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
        $sql = "SELECT id, nome, email , senha, tipo_usuario  FROM usuario";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * Método que insere uma categoria na tabela Categoria.
     */
    public function insert($dados) 
    {
        $sql = "INSERT INTO usuario (nome, email, senha,tipo_usuario) VALUES (?, ?, sha1(?),?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados['nome']);
        $stmt->bindValue(2, $dados['email']);
        $stmt->bindValue(3, $dados['senha']);
        $stmt->bindValue(4, $dados['usuario_tipo']);
        $stmt->execute();
    }

    public function update($dados_usuario) 
    {

        $sql = "UPDATE usuario SET nome=?, email=?, senha = sha1(?), tipo_usuario=?  WHERE id = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_usuario['nome']);
        $stmt->bindValue(2, $dados_usuario['email']);
        $stmt->bindValue(3, $dados_usuario['senha']);
        $stmt->bindValue(4, $dados_usuario['usuario_tipo']);
        $stmt->bindValue(5, $dados_usuario['id']);
        $stmt->execute();
    }

    /**
     * Remove um registro da tabela Categoria.
     */
    public function delete($id) 
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }


    /**
     * Retorna um usuário específico
     */
    public function getMyUserById($id) 
    {
        $stmt = $this->conexao->prepare("SELECT id, nome, email, senha FROM usuario WHERE id = ?");
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

        // Caso retorne um id, verificar se o id pertence ao proprio usuário que
        // está sendo editado. Se pertencer a outro usuário, acusará email já
        // vinculado a outro usuário.
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