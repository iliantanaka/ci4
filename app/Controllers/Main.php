<?php

namespace App\Controllers;


class Main extends BaseController
{

    public function index()
    {
        $nomes = [
            'Ilian',
            'Karlla',
            'Clovison'
        ];
        echo view('loja/pagina.php', ['nomes' => $nomes]);
    }
}
