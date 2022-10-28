<?php
namespace App\Model;
use App\DAO\HomeDAO;
use \PDO;
use \PDOException;
class HomeModel extends Model
{
    public $id, $nome, $comentarios;

   
    

    public function getById(int $id)
    {
        $dao = new ComentariosDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new ComentariosModel(); 
    }

    public function getAllRows()
    {      

        $dao = new ComentariosDAO();

        $this->rows = $dao->getAllRows();
    }
 
}