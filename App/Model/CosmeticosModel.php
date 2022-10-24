<?php
namespace App\Model;
use App\DAO\CosmeticosDAO;

class CosmeticosModel extends Model
{
    public $id, $nome,$id_categoria;
    public $valor,$quantidade, $imagem;

   
    

    public function getById(int $id)
    {
        $dao = new CosmeticosDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new CosmeticosModel(); 
    }

    public function getAllRows()
    {      

        $dao = new CosmeticosDAO();

        $this->rows = $dao->getAllRows();
    }

}