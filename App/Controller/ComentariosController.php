<?php

namespace App\Controller;


class ComentariosController extends Controller
{
    public static function index()
    {
        
        $model = new HomeModel();
        $model->getAllRows();
        parent::render('Comentarios/comentarios');

    }
}