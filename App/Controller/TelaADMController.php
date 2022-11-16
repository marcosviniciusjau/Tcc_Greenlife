<?php

namespace App\Controller;


class TelaADMController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();
        
        parent::render('TelaADM/tela-adm');

    }
}