<?php

namespace App\Model;

use App\DAO\ComentariosDAO;



class ComentariosModel extends Model
{
    public $id,$id_usuario, $descricao;



    public function getAllRowsComentarios()
    {      

        $dao = new ComentariosDAO();
      
        $this->rows = $dao->getAllRowsComentarios();
       
    }
    public function save()
    {
        $dao = new ComentariosDAO(); 


        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->insert($this); 
        }        
    }
   public function selectById(int $id_usuario)
    {
        $dao = new ComentariosDAO();

        $obj = $dao->selectById($id_usuario); 

      
        return ($obj) ? $obj : new ComentariosModel(); 
    }
    public function getAllRows()
    {
     

          $dao = new ComentariosDAO();

        $this->rows = $dao->getAllRows();
    }

    public function getById(int $id)
    {
        try 
        {
            $dao = new ProdutoDAO();

            $dados_comentario = $dao->getById($id);

            if(is_object($dados_comentario))
                return $dados_comentario;
            else 
                throw new Exception("Produto não encontrado.");

        } catch (Exception $e) {

            $this->validaton_erros[] = $e->getMessage();

            throw new Exception("Erro na camada DAO.");
        }   }


    public function delete(int $id)
    {
        $dao = new ComentariosDAO();

        $dao->delete($id);
    }

  
}
