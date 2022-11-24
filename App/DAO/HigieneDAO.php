<?php
namespace App\DAO;
use App\Model\HigieneModel;
use \PDO;

class HigieneDAO extends DAO
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
        
        $stmt = $this->conexao->prepare("SELECT * FROM produto WHERE id_categoria = 3");
        $stmt->execute();

       
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
   


   
}