<?php
namespace App\Model;
use App\DAO\ConsultaDAO;


class ConsultaModel extends Model
{
    public $id, $nome,$descricao;
    public $valor,$quantidade, $imagem;

   
    

    public function getById(int $id)
    {
        $dao = new ConsultaDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new ConsultaModel(); 
    }

    public function getAllRows()
    {      

        $dao = new ConsultaDAO();

        $this->rows = $dao->select();
    }
 
}