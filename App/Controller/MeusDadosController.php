<?php

namespace App\Controller;


class MeusDadosController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();
        
        parent::render('TelaCliente/meus-dados');

    }
}