<?php
namespace App\Model;
use App\DAO\PromocoesDAO;

class PromocoesModel extends Model
{
    public $id, $nome,$id_categoria;
    public $valor,$quantidade, $imagem;

   
    

    public function getById(int $id)
    {
        $dao = new PromocoesDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new PromocoesModel(); 
    }

    public function getAllRows()
    {      

        $dao = new PromocoesDAO();

        $this->rows = $dao->getAllRows();
    }

}