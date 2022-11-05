<?php
// As classes Controller são responsáveis por responder os comandos do usuário mostando a View
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

        include PATH_VIEW . '/Categoria/ListaCategoria.php';
    }
   
    // Devolverá o formulário ao usuário

    public static function form()
    {
        include PATH_VIEW . '/Categoria/FormCategoria.php';
      
    }
    //Preencherá uma Model para que as informações sejam enviadas para o banco de dados para serem salvas.

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

    public static function delete()
    {
        
        
        if(isset($_GET['id']))
        {
            $categoria_dao = new CategoriaDAO();

            $categoria_dao->delete($_GET['id']);

            header("Location: /categoria?excluido=true");
        } else 
            header("Location: /categoria");
    }  
}