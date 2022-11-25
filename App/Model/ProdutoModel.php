<?php

namespace App\Model;

use App\DAO\ProdutoDAO;

use App\DAO\CategoriaDAO;
use \Exception;

class ProdutoModel extends Model
{
    public $id, $nome, $id_categoria,$link;
    public $valor,$quantidade, $imagem;
    
    public $lista_categorias = array();
    public $total_categorias = array();

    public $arr_categorias;

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
    public function getAll()
    {
        try 
        {
            $dao = new ProdutoDAO();

            $arr_produtos = $dao->getAllRows();

            if(is_array($arr_produtos))
                return $arr_produtos;
            else 
                throw new Exception("Erro ao obter a lista de produtos.");

        } catch (Exception $e) {

            $this->validaton_erros[] = $e->getMessage();

            throw new Exception("Erro ao obter a lista de produtos.");
        }

    }
    public function getAllRows()
    {
     
        
          $dao = new ProdutoDAO();
         $this->rows = $dao->select();
    }

    public function getAllRowsCategoria()
    {
     
        
          $dao = new ProdutoDAO();
          $this->rows = $dao->getAllRowsCategoria();
    }
    
    
    public function getById(int $id)
    {
        try 
        {
            $dao = new ProdutoDAO();

            $dados_produto = $dao->getById($id);

            if(is_object($dados_produto))
                return $dados_produto;
            else 
                throw new Exception("Produto não encontrado.");

        } catch (Exception $e) {

            $this->validaton_erros[] = $e->getMessage();

            throw new Exception("Erro na camada DAO.");
        }
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
