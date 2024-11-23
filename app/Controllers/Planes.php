<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\PlanesModel;

class Planes extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel();
        $datos = ['titulo' => 'Planes'];
        $datos['datos'] = $planes->findAll(); //select * from clientes


        return view('planes',$datos); //Lo de views
    }
}
