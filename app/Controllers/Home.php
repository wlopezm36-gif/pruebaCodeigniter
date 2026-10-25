<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $renderer = service('renderer');

        return $renderer
            ->setVar('titulo', 'Prueba codegigniter terminado')
            ->setVar('mensaje', 'willian Lopez')
            ->render('home');
    }
}
