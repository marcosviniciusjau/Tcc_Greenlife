<?php
namespace App\Model;
use App\DAO\VestuarioDAO;

class VestuarioModel extends Model
{
    public $id, $nome,$id_categoria;
    public $valor,$quantidade, $imagem;

   
    

    public function getById(int $id)
    {
        $dao = new VestuarioDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new VestuarioModel(); 
    }

    public function getAllRows(int $id)
    {      

        $dao = new VestuarioDAO();

        $this->rows = $dao->getAllRows($id);
    }

}