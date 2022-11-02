<?php

namespace App\Model;

use App\DAO\UsuarioDAO;

class UsuarioModel extends Model
{
    public $id, $nome, $email, $senha, $tipo_usuario,$foto_perfil;


   

 
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

    public function getById(int $id)
    {
        $dao = new UsuarioDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new UsuarioModel(); 
    }



    public function delete(int $id)
    {
        $dao = new CategoriaDAO();

        $dao->delete($id);
    }
}
