<?php

namespace App\Model;

use App\DAO\UsuarioDAO;

class UsuarioModel extends Model
{
    public $id, $nome_usuario, $email, $senha,$foto_perfil;


   

 
    public function save()
    {
        $dao = new UsuarioDAO(); 


        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }        
    }

    public function getAllRows()
    {      

        $dao = new UsuarioDAO();

        $this->rows = $dao->select();
    }

    public function getAllRowsComentarios()
    {      

        $dao = new UsuarioDAO();

        $this->rows = $dao->getAllRowsComentarios();
    }
    public function getById(int $id)
    {
        try 
        {
            $dao = new UsuarioDAO();

            $dados_usuario = $dao->getById($id);

            if(is_object($dados_usuario))
                return $dados_usuario;
            else 
                throw new Exception("Produto não encontrado.");

        } catch (Exception $e) {

            $this->validaton_erros[] = $e->getMessage();

            throw new Exception("Erro na camada DAO.");
        }
    }
 



}
