<?php

namespace App\Controller;
use App\DAO\ComentariosDAO;
use App\Model\ComentariosModel;


class ComentariosController extends Controller
{
    public static function index()
    {
        
        parent::isAuthenticated();
        $model = new ComentariosModel();
        $model->selectById();

        //var_dump($model1);
       
        parent::render('Comentarios/lista_comentarios' , $model);
      

    }
    public static function form()
    {
        parent::isAuthenticated();
        parent::render('Comentarios/comentarios');

    }
    public static function save()
    {
        parent::isAuthenticated();

        $model= new ComentariosModel();
        
        $model->id_usuario =  $_SESSION['usuario_logado']['id'];
        $model->descricao = $_POST['descricao'];

        $model->save(); 

        header("Location: /");
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