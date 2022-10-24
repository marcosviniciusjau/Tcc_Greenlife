<?php
namespace App\DAO;
use App\Model\HomeModel;
use \PDO;

class HomeDAO extends DAO
{


    public function __construct()
    {
        parent::__construct();   
     }


     public function select()
     {
         $sql = "SELECT * FROM produto";
 
         $stmt = $this->conexao->prepare($sql);
         $stmt->execute();
 
         return $stmt->fetchAll(PDO::FETCH_CLASS);        
     }
     
     public function getAllRows() {
        
        $stmt = $this->conexao->prepare("SELECT * FROM produto ORDER BY quantidade DESC");
        $stmt->execute();

       
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
   
     public function selectById(int $id)
    {


        $sql = "SELECT * FROM produto ORDER BY quantidade DESC";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\HomeModel"); 
    }
}