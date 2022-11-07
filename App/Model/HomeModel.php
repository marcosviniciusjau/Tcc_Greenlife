<?php
namespace App\Model;
use App\DAO\HomeDAO;
use App\DAO\ComentariosDAO;
use \PDO;
use \PDOException;
use App\Model\ComentariosModel;
class HomeModel extends Model
{
    public $id, $nome;
    public $valor,$quantidade, $imagem, $comentarios;

   
    

    public function getById(int $id)
    {
        $dao = new HomeDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new HomeModel(); 
    }

    public function getAllRows()
    {      

        $dao = new HomeDAO();
      
        $this->rows = $dao->getAllRows();
       
    }

    public function select(ComentariosModel $model)
    {      

        $dao = new ComentariosDAO();
      
        $this->rows = $dao->select($model);
       
    }
 
}