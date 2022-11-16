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


    public function getAllRowsComentarios() 
    {
        $sql = "SELECT id, nome_usuario, email , senha, foto_perfil  FROM usuario";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    public function getAllRows() 
    {
        $sql = "SELECT id, nome_usuario, email , senha, foto_perfil  FROM usuario";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * Método que insere uma categoria na tabela Categoria.
     */
    public function insert(UsuarioModel $model)
   
    {
        $sql = "INSERT INTO usuario (nome_usuario, email, senha,foto_perfil) VALUES (?, ?, sha1(?),?)";


        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.

  $stmt = $this->conexao->prepare($sql);



        $stmt->bindValue(1, $model->nome_usuario);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
       
        $stmt->bindValue(4, $model->foto_perfil);
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