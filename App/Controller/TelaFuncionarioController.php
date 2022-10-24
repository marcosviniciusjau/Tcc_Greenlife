<?php

namespace App\Controller;


class TelaFuncionarioController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();
        
        parent::render('TelaFuncionario/tela-funcionario');

    }
}