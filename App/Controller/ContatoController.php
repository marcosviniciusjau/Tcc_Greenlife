<?php

namespace App\Controller;


class ContatoController extends Controller
{
    public static function index()
    {
        
        
        parent::render('Contato/fale_conosco');

    }
}