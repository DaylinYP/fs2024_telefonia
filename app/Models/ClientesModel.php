<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table         = 'clientes'; //Nombre exacto de la tabla de la base de datos
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [
        'cliente_id', 'apellido', 'nombre', 'correo_electronico',
        'calle_avenida', 'no_casa', 'zona'
    ];
}

//Los modelos son los que se conectan directamente con las tablas