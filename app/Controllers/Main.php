<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends Controller
{

    public function index()
    {
        $funcs = [
            [
                'nome' => 'efefe',
                'email' => 'dfsdf'
            ],
            [
                'nome' => 'efefe',
                'email' => 'dfsdf'
            ],
            [
                'nome' => 'efefe',
                'email' => 'dfsdf'
            ]
        ];
        echo view('pagina', ['funcs' => $funcs]);
    }
}
