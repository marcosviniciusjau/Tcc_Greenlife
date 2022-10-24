<?php

namespace App\Controller;


class CarrinhoController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();
        
        parent::render('TelaCliente/carrinho');

    }
    public static function form()
    {
       
            parent::isAuthenticated();
        parent::render('TelaCliente/carrinho_cliente');
    }
}