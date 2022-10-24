<?php
namespace App\Model;
use App\DAO\AlimentacaoDAO;

class AlimentacaoModel extends Model
{
    public $id, $nome,$id_categoria;
    public $valor,$quantidade, $imagem;

   
    

    //public function getById(int $id)
    //{
        //$dao = new AlimentacaoDAO();

        //$obj = $dao->selectById($id); 

      
        //return ($obj) ? $obj : new AlimentacaoModel(); 
    //}

    public function getAllRows(int $id)
    {     

        $dao = new AlimentacaoDAO();

        $this->rows = $dao->getAllRows($id);

        //var_dump($this->rows);
        //exit();
    }

}