<?php

namespace App\Model;

use App\DAO\ProdutoDAO;

use App\DAO\CategoriaDAO;
class ProdutoModel extends Model
{
    public $id, $nome, $id_categoria,$link;
    public $valor,$quantidade, $imagem;
    
    public $lista_categorias = array();
    public $total_categorias = array();

    public function setCategoria(int $_id_categoria)
    {
        if (!empty($_id_categoria))
            $this->id_categoria = $_id_categoria;
        else
            $this->validaton_erros[] = "Desculpe, selecione a categoria.";
    }
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

    public function getAllCategorias()
    {
        $categoria_dao = new CategoriaDAO();
        
        return $categoria_dao->getAllRows();
    }
  
}
