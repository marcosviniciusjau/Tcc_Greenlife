<?php

namespace App\Controller;


class TelaClienteController extends Controller
{
    public static function index()
    {
        
        
        parent::render('TelaCliente/tela-cliente');

    }
    public static function logout()
    {
    
        
        unset($_SESSION["usuario_logado"]);
        header("Location:/login_usuario");
    }
}