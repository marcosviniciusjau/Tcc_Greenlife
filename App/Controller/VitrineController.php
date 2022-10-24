<?php

namespace App\Controller;


class VitrineController extends Controller
{
    public static function index()
    {

        parent::render('/usuario/vitrine.png');

    }
}