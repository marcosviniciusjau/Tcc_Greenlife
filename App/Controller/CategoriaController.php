<?php

namespace App\Controller;

use App\Model\CategoriaModel;
use App\DAO\CategoriaDAO;
use \Exception;

class CategoriaController extends Controller
{

    public static function index() 
    {
      

        $categoria_dao = new CategoriaDAO();
        $lista_categorias = $categoria_dao->getAllRows();
        $total_categorias = count($lista_categorias);

        include PATH_VIEW . 'modules/Categoria/ListaCategoria.php';
    }
    public static function ver() 
    {
        parent::isProtected();

        if(isset($_GET['id']))
        {
            $categoria_dao = new CategoriaDAO();

            $dados_categoria = $categoria_dao->getById($_GET['id']);

            include PATH_VIEW . 'modules/Categoria/FormCategoria.php';
        } else 
            header("Location: /categoria"); 
    }
    
    public static function form()
    {
        include PATH_VIEW . 'modules/Categoria/FormCategoria.php';
      
    }
   
    public static function save()
    {
        

        $categoria_dao = new CategoriaDAO();
    
        $dados_para_salvar= array(
            'descricao' => $_POST["descricao"],
        );
    
        if(isset($_POST['id'])) {
    
            $dados_para_salvar['id'] = $_POST["id"];
    
            $categoria_dao->update($dados_para_salvar);
    
        } else {
    
            $categoria_dao->insert($dados_para_salvar);
    
            echo "Inserido.";
        }
        
        header("Location: /categoria");     
    }

    public static function excluir()
    {
        parent::isProtected();
        
        if(isset($_GET['id']))
        {
            $categoria_dao = new CategoriaDAO();

            $categoria_dao->delete($_GET['id']);

            header("Location: /categoria?excluido=true");
        } else 
            header("Location: /categoria");
    }  
  
}