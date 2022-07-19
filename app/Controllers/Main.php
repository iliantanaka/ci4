<?php

namespace App\Controllers;


class Main extends BaseController
{
  public function index()
  {
    $data['titulo'] = 'Este eh o titulo!!';

    echo view('templates/header');
    echo view('conteudo', $data);
    echo view('templates/footer');
  }
}
