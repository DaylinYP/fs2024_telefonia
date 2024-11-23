<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos = ['titulo' => 'Clientes'];
        $datos['datos'] = $clientes->findAll();
        //clientes es la vista que muestra los clientes
        //pendiente de diseñar
        return view('clientes', $datos);
    }
    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }

    public function agregarCliente()
    {
        $datos = [

            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNoCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];

        $clientes = new ClientesModel();
        $clientes->insert($datos); //insert into cliente values (...)
        echo "Datos guardados";
        return redirect()->route('clientes');
    }

    //ELIMINAR DATO
    public function eliminarClientes($id = null)
    {
        $clientes = new ClientesModel(); //Models
        $clientes->delete($id); //Nombre de la llave primaria = la que se coloca en el controlador
       //Redireccionarlo a la tabla clientes
        return redirect()->route('clientes');
    }
    
    //ACTUALIZAR DATO
    public function actualizarClientes($id=null)
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->where('cliente_id',$id)->first();
        return view ('form_modificar_clientes', $datos);
    }

    //MODIFICAR DATO
    public function modificarClientes()
    {
        $datos=[
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correo_electronico' =>$this->request->getVar('txtCorreoElectronico'),
            'calle_avenida'=>$this->request->getVar('txtCalleAvenida'),
            'no_casa'=>$this->request->getVar('txtNoCasa'),
            'zona'=>$this->request->getVar('txtZona')
        ];
       $clientes = new ClientesModel();
       $clientes->update($datos['cliente_id'], $datos);
       return redirect('ver_clientes');
    }
}