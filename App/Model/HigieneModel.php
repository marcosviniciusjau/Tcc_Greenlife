<?php
namespace App\Model;
use App\DAO\HigieneDAO;

class HigieneModel extends Model
{
    public $id, $nome,$id_categoria;
    public $valor,$quantidade, $imagem;

   
    

    public function getById(int $id)
    {
        $dao = new HigieneDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new HigieneModel(); 
    }

    public function getAllRows()
    {      

        $dao = new HigieneDAO();

        $this->rows = $dao->getAllRows();
    }

}