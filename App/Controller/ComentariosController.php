<?php

namespace App\Controller;
use App\DAO\UsuarioDAO;
use App\Model\ComentariosModel;
use App\Model\UsuarioModel;
class ComentariosController extends Controller
{
    public static function index()
    {
        
        $model = new ComentariosModel();
        $model->getAllRows();
       
        parent::render('Comentarios/comentarios', $model);

    }
    public static function save()
    {
        $model = new UsuarioModel();
        $model->getAllRows();
        $usuario_dao = new UsuarioDAO();
        $dados_para_salvar =  $usuario_dao;
        $meus_dados = $usuario_dao->getMyUserById(LoginController::getIdOfCurrentUser());

        $dados_para_salvar = array(
            'comentarios'     => $_POST["comentarios"],
           
        );


      

      

        header("Location: /");
    }
}