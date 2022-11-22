<?php

namespace App\Model;

use App\DAO\ComentariosDAO;



class ComentariosModel extends Model
{
    public $id,$id_usuario, $descricao;



    public function getAllRowsComentarios()
    {      

        $dao = new ComentariosDAO();
      
        $this->rows = $dao->getAllRowsComentarios();
       
    }
    public function save()
    {
        $dao = new ComentariosDAO(); 


        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->insert($this); 
        }        
    }

    public function getAllRows()
    {
     

          $dao = new ComentariosDAO();

        $this->rows = $dao->getAllRows();
    }

    public function getById(int $id)
    {
        $dao = new ComentariosDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new ComentariosModel(); 
    }


    public function delete(int $id)
    {
        $dao = new ComentariosDAO();

        $dao->delete($id);
    }

  
}
