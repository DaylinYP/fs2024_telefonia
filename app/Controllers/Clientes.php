<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string
    {
        
        $clientes = new ClientesModel();
        $datos = ['titulo' => 'Clientes'];
        $datos['datos'] = $clientes->findAll(); //select * from clientes


        return view('clientes', $datos); //Lo de views
    }
}
