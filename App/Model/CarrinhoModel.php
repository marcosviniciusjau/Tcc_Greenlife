<?php

namespace App\Model;

use App\DAO\ProdutoDAO;


class ProdutoModel extends Model
{
    public $id, $nome, $id_categoria;
    public $valor,$quantidade, $imagem;



 
    public function save()
    {
        $dao = new ProdutoDAO(); 


        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }        
    }

    public function getAllRows()
    {
     
        // Instanciará a classe ProdutoDAO 
          $dao = new ProdutoDAO();
// Selecionará  os registros obtidos da getAllRows e guardará na propriedade  $rows
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id); 

      
        return ($obj) ? $obj : new ProdutoModel(); 
    }


    public function delete(int $id)
    {
        $dao = new ProdutoDAO();

        $dao->delete($id);
    }

  
}
