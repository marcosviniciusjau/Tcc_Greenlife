<?php

namespace App\Controller;


class ConfigController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();
        
        parent::render('TelaCliente/config');

    }
}