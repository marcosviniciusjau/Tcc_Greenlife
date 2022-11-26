<?php

namespace App\Controller;


class ListasController extends Controller
{
    public static function index()
    {
        parent::isProtected();
        
        parent::render('TelaADM/listas');

    }
}