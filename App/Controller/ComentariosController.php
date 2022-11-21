<?php

namespace App\Controller;
use App\DAO\UsuarioDAO;
use App\Model\ComentariosModel;


class ComentariosController extends Controller
{
    public static function index()
    {
        
        parent::isAuthenticated();
        $model1 = new ComentariosModel();
        $model1->getAllRowsComentarios();

        //var_dump($model1);
       
        parent::render('Home/greenlife' , $model1);
      

    }
    public static function form()
    {
        parent::isAuthenticated();
        parent::render('Comentarios/comentarios');

    }
    public static function save()
    {
        parent::isAuthenticated();
        
        $model = new ComentariosModel();

        $model->id =  $_POST['id'];
        $model->descricao = $_POST['descricao'];
     
        $model->save(); 


      

      

        header("Location: /");
    }
}