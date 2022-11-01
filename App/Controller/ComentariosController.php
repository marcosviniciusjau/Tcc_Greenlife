<?php

namespace App\Controller;
use App\Model\ComentariosModel;

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

        $model = new ComentariosModel();

        if (isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);

        $model->id =  $_POST['id'];

        $model->comentarios = $_POST['comentarios'];
       
        $model->save(); // Chamará o método save da Model.

        header("Location: /");
    }
}