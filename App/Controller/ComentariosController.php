<?php

namespace App\Controller;
use App\DAO\UsuarioDAO;
use App\Model\ComentariosModel;


class ComentariosController extends Controller
{
    public static function index()
    {
        
        parent::isAuthenticated();
        $model = new ComentariosModel();
        $model->getAllRowsComentarios();

        //var_dump($model1);
       
        parent::render('Home/greenlife' , $model);
      

    }
    public static function form()
    {
        parent::isAuthenticated();
        parent::render('Comentarios/comentarios');

    }
    public static function save()
    {
        parent::isAuthenticated();

        $comentarios_dao = new ComentarisoDAO();
        $dados_para_salvar = array(
            'id_usuario'     => $_SESSION ,
            'descricao'    => $_POST["descricao"],
           
        );
   
   
        $comentarios_dao->insert($dados_para_salvar);
    
      


      

      

        header("Location: /");
    }
}