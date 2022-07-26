<?php

namespace App\Libraries\Componentes;

class Componentes
{
    public function cliente($funcionario)
    {
        $data = [
            'nome' => $funcionario['nome'],
            'ramal' => $funcionario['ramal']
        ];
        return view('funcionario', $data);
    }
}
