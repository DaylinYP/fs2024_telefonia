<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        a,
        h1,
        label {
            color: black;
            text-shadow: 1px 1px 1px #4f4f4f;
        }
    </style>
</head>

<body style="background-color:#d1d1d1">
    <div class="container">
        <br>
        <a class="btn btn-danger shadow-sm p-3 mb-3 bg-body rounded" href="<?= base_url('ver_clientes'); ?>" role="button"><i class="bi bi-x-square"> Cancelar</i></a>
        <h1 class="text-center">Modificación de Clientes</h1>
        <form action="<?= base_url('modificar_clientes'); ?>" method="post" class="col-md-6 mx-auto">
            <div class="mb-3">
                <label for="txtClienteId" class="form-label">ID</label>
                <input type="text" name="txtClienteId" id="txtClienteId" class="form-control" placeholder="Ingrese ID" value="<?= $datos['cliente_id']; ?>">
            </div>

            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese apellido" value="<?= $datos['apellido']; ?>">
            </div>

            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Ingrese nombre" value="<?= $datos['nombre']; ?>">
            </div>

            <div class="mb-3">
                <label for="txtCorreoElectronico" class="form-label">Correo Electrónico</label>
                <input type="text" name="txtCorreoElectronico" id="txtCorreoElectronico" class="form-control" placeholder="Ingrese correo electrónico" value="<?= $datos['correo_electronico']; ?>">
            </div>

            <div class="mb-3">
                <label for="txtCalleAvenida" class="form-label">Calle / Avenida</label>
                <input type="text" name="txtCalleAvenida" id="txtCalleAvenida" class="form-control" placeholder="Ingrese Calle o Avenida" value="<?= $datos['calle_avenida']; ?>">
            </div>

            <div class="mb-3">
                <label for="txtNoCasa" class="form-label">No. Casa</label>
                <input type="text" name="txtNoCasa" id="txtNoCasa" class="form-control" placeholder="Ingrese número de casa" value="<?= $datos['no_casa']; ?>">
            </div>
            <div class="mb-3">
                <label for="txtZona" class="form-label">Cliente ID</label>
                <input type="text" name="txtZona" id="txtZona" class="form-control" placeholder="Ingrese zona" value="<?= $datos['zona']; ?>">
            </div>

            <div class="mb-3">
                <input type="submit" value="Guardar Cambios" class="btn btn-warning">
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous"></script>
</body>

</html>
