<?php

namespace App\Controller;

use App\Model\ProdutoModel;

use \Exception;
use App\DAO\{ProdutoDAO,CategoriaDAO};

class ProdutoController extends Controller
{


    public static function index()
    {
        
        parent::isProtected();
        
        $model = new ProdutoModel();
       
 
        $model->getAllRows();
      
       parent::render('Produto/ListaProduto', $model);
    }
    
    public static function form(ProdutoModel $_model = null)
    {
        
        parent::isProtected();

        $model = ($_model == null) ? new ProdutoModel() : $_model;

        $model->lista_categorias = $model->getAllCategorias();
        
      
        $model->lista_categorias = $model->getAllCategorias();
      
        include PATH_VIEW . 'modules/Produto/FormProduto.php';
       
    }
   
    public static function save()
    {
        parent::isProtected();
        
        $model = new ProdutoModel();

        $model->id =  $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->link = $_POST['link'];
        $model->setCategoria((int) $_POST["id_categoria"]);
        $model->valor = $_POST['valor'];
        $model->quantidade = $_POST['quantidade'];
   
        try {
         
            if (!is_dir(UPLOADS))
                throw new Exception("Diretório não encontrado");

            if (is_executable($_FILES["arquivo_up"]["tmp_name"]))
                throw new Exception("Arquivos Executáveis não são permitidos");

            $ext_arquivo = pathinfo($_FILES["arquivo_up"]["name"], PATHINFO_EXTENSION);

            $nome_unico = uniqid("enviado_") . "." . $ext_arquivo;

            $nome_arquivo_servidor = UPLOADS . $nome_unico;

            if (move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor)) {
                $model->imagem = $nome_unico;
        
            } else throw new Exception("Erro ao enviar. Erro:" . $_FILES["arquivo_up"]["error"]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $model->save(); 

        header("Location: /produto");
    }

    public static function ver()
    {
        parent::isProtected();

        try {
            if (isset($_GET['id'])) {
                $model = new ProdutoModel();

                $dados = $model->getById((int) $_GET['id']);

                self::form($dados);
            } else {
                header("location: /produto");
            }
        } catch (Exception $e) {

            self::form($model);
        }
    }

 
    public static function delete()
    {
        $model = new ProdutoModel();

        $model->delete((int) $_GET['id']); 
        
        header("Location: /produto");
    }
}
