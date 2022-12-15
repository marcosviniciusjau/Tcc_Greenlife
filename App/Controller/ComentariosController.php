<?php

namespace App\Controller;
use App\DAO\ComentariosDAO;
use App\Model\ComentariosModel;
use Exception;

class ComentariosController extends Controller
{
    public static function index()
    {
        
       
        $model = new ComentariosModel();
        $id_usuario_selecionada =  $_SESSION['usuario_logado']['id'];
        $model->selectById($id_usuario_selecionada );

        //var_dump($model1);
       
        parent::render('Comentarios/lista_comentarios' , $model);
      

    }
    public static function form(ComentariosModel $_model = null)
    {
        parent::isAuthenticated();
        $model = ($_model == null) ? new ComentariosModel() : $_model;
        
        include PATH_VIEW . 'modules/Comentarios/comentarios.php';

    }
    public static function save()
    {
        parent::isAuthenticated();

        $model= new ComentariosModel();
        
        $model->id_usuario =  $_SESSION['usuario_logado']['id'];
        $model->descricao = $_POST['descricao'];

        $model->save(); 

        header("Location: /comentarios");
    }

    public static function ver()
    {
        parent::isProtected();
        
        try {
            if (isset($_GET['id'])) {
               
                $model = new ComentariosModel();

                $dados = $model->getById((int) $_GET['id']);
                
                self::form($dados);
            
            } else {
                header("location: /comentarios");
            }
           
        } catch (Exception $e) {

            self::form($model);
        }
        
    }

 
    public static function delete()
    {
        $model = new ComentariosModel();

        $model->delete((int) $_GET['id']); 
        
        header("Location: /comentarios");
    }
}