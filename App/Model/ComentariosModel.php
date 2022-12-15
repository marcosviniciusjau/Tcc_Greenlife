<?php

namespace App\Model;

use App\DAO\ComentariosDAO;
use Exception;


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
        $this->rows = $dao->selectById($id_usuario);
    

      
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
            $dao = new ComentariosDAO();

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
