<?php

namespace App\Controllers;

use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    //BUSCAR DATO
    public function index(): string
    {
        $planes = new PlanesModel();

        /* select * from planes = findAll()*/
        $datos = ['titulo' => 'Planes'];
        $datos['datos'] = $planes->findAll();

        //print_r($datos);

        return view('planes', $datos);
    }

    //INSERTAR DATO
    public function nuevoPlan(): string
    {
        $datos = ['titulo' => 'Planes Nuevos'];
        return view('planes_nuevos');
    }

    public function agregarPlan()
    {
        $datos = [
            'plan_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'pago_mensual' => $this->request->getVar('txtPagoMensual'),
            'cantidad_minutos' => $this->request->getVar('txtCantidadMinutos'),
            'cantidad_mensajes' => $this->request->getVar('txtCantidadMensajes')
        ];
        $planes = new PlanesModel();
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }

    //ELIMINAR DATO
    public function eliminarPlanes($id = null)
    {
        $planes = new PlanesModel();
        $planes->delete($id);
        return redirect()->route('planes');
    }

    //ACTUALIZAR DATO
    public function actualizarPlanes($id = null)
    {
        $planes = new PlanesModel();
        $datos['datos'] = $planes->where('plan_id', $id)->first(); //Seleccionar en planes el planid y su valor
        //where   campo y su valor
        return view('form_modificar_plan', $datos);
    }

    //MODIFICAR DATOS
    public function modificarPlan()
    {
        $datos = [
            'plan_id' => $this->request->getVar('txtPlanId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'pago_mensual' => $this->request->getVar('txtPagoMensual'),
            'cantidad_minutos' => $this->request->getVar('txtCantidadMinutos'),
            'cantidad_mensajes' => $this->request->getVar('txtCantidadMensajes')
        ];
        //print_r($datos);
        $planes = new PlanesModel();
        //update (primary key, campos y datos)
        $planes->update($datos['plan_id'], $datos);
        return redirect('ver_planes');
    }
}
