<?php

namespace App\Controller;


class TelaADMController extends Controller
{
    public static function index()
    {
        parent::isProtected();
        
        parent::render('TelaADM/tela-adm');

    }
}