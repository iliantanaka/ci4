<?php

namespace App\Controllers;


class Main extends BaseController
{

  public function index()
  {

    $marcas = [
      'marca1',
      'marca2',
      'marca3'
    ];

    echo view('pagina', ['marcas' => $marcas]);
  }
}
