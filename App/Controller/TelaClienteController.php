<?php

namespace App\Controller;


class TelaClienteController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();
        
        parent::render('TelaCliente/tela-cliente');

    }
}