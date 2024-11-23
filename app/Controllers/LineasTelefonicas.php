<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\LineasTelefonicasModel;

class LineasTelefonicas extends BaseController
{
    public function index(): string
    {
        $lineastelefonicas = new LineasTelefonicasModel();
        $datos = ['titulo' => 'Líneas Telefónicas'];
        $datos['datos'] = $lineastelefonicas->findAll(); //select * from clientes


        return view('lineastelefonicas', $datos); //Lo de views
    }
}
