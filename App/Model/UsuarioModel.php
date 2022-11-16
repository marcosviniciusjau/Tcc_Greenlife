<?php

namespace App\Model;

use App\DAO\UsuarioDAO;

class UsuarioModel extends Model
{
    public $id, $nome_usuario, $email, $senha,$foto_perfil,$comentarios;


   

 
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

        $this->rows = $dao->getAllRows();
    }

    public function getAllRowsComentarios()
    {      

        $dao = new UsuarioDAO();

        $this->rows = $dao->getAllRowsComentarios();
    }
    public function getById(int $id)
    {
        $dao = new UsuarioDAO();

        $obj = $dao->getById($id); 

      
        return ($obj) ? $obj : new UsuarioModel(); 
    }



}
