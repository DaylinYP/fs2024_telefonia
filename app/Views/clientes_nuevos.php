<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        label,
        h1,
        a {
            color: black;
            text-shadow: 1px 1px 1px #4f4f4f;
        }
        .form-container {
            max-width: 600px; 
            margin: 0 auto;  
        }
    </style>
</head>

<body style="background-color: #d1d1d1;">
    <div class="container form-container">
        <br>
        <a class="btn btn-danger shadow-sm p-3 mb-3 bg-body rounded" href="<?= base_url('ver_clientes'); ?>" role="button"><i class="bi bi-x-square"> Cancelar</i></a>

        <h1>Nuevo Cliente</h1>
        <form action="agregar_cliente" method="post"> <!--Metodo post para que se vayan los datos ocultos-->
            <div class="mb-3">
                <label for="txtId" class="form-label">ID</label>
                <input type="number" id="txtId" name="txtId" class="form-control" placeholder="Ingrese ID">
            </div>

            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre">
            </div>

            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese apellido">
            </div>

            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electrónico</label>
                <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese correo electrónico">
            </div>

            <div class="mb-3">
                <label for="txtCalleAvenida" class="form-label">Calle/Avenida</label>
                <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control" placeholder="Ingrese Calle o Avenida">
            </div>

            <div class="mb-3">
                <label for="txtNoCasa" class="form-label">No. Casa</label>
                <input type="text" id="txtNoCasa" name="txtNoCasa" class="form-control" placeholder="Ingrese No. Casa">
            </div>

            <div class="mb-3">
                <label for="txtZona" class="form-label">Zona</label>
                <input type="number" id="txtZona" name="txtZona" class="form-control" placeholder="Ingrese Zona">
            </div>
            <br>
            <div class="mb-3">
                <input type="submit" value="Guardar" id="btnGuardarCliente" name="btnGuardarCliente" class="form-control btn btn-warning">
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous"></script>
</body>

</html>
