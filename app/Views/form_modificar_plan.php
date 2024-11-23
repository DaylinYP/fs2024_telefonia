<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Planes</title>
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
        .form-container {
            max-width: 600px; 
            margin: 0 auto;
        }
    </style>
</head>

<body style="background-color:#d1d1d1">
    <div class="container form-container">
        <br>
        <a class="btn btn-danger shadow-sm p-3 mb-3 bg-body rounded" href="<?= base_url('ver_clientes'); ?>" role="button"><i class="bi bi-x-square"> Cancelar</i></a>
        <h1>Modificación de Planes</h1>
        <form action="<?=base_url('modificar_plan');?>" method="post">
            <div class="mb-3">
                <label for="txtPlanId" class="form-label">ID</label>
                <input type="text" name="txtPlanId" class="form-control" id="txtPlanId"
                    placeholder="Ingrese ID del plan" readonly value="<?= $datos['plan_id']; ?>">
            </div>

            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese el nombre"
                    value="<?=$datos['nombre']?>">
            </div>

            <div class="mb-3">
                <label for="txtPagoMensual" class="form-label">Pago Mensual</label>
                <input type="text" name="txtPagoMensual" id="txtPagoMensual" class="form-control"
                    placeholder="Ingrese pago mensual" value="<?=$datos['pago_mensual']?>">
            </div>

            <div class="mb-3">
                <label for="txtCantidadMinutos" class="form-label">Cantidad de Minutos</label>
                <input type="text" name="txtCantidadMinutos" id="txtCantidadMinutos" class="form-control"
                    placeholder="Ingrese cantidad de minutos" value="<?=$datos['cantidad_minutos']?>">
            </div>

            <div class="mb-3">
                <label for="txtCantidadMensajes" class="form-label">Cantidad de Mensajes</label>
                <input type="text" name="txtCantidadMensajes" id="txtCantidadMensajes" class="form-control"
                    placeholder="Ingrese cantidad de mensajes" value="<?=$datos['cantidad_mensajes']?>">
            </div>

            <div class="mb-3">
                <input type="submit" id="Enviar" value="Guardar Cambios" class="btn btn-warning">
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous">
    </script>
</body>

</html>
