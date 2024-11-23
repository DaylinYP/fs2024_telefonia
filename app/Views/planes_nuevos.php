<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Plan</title>
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
        <a class="btn btn-danger shadow-sm p-3 mb-3 bg-body rounded" href="<?= base_url('ver_planes'); ?>" role="button"><i class="bi bi-x-square"> Cancelar</i></a>
      
    <h1>Nuevo Plan</h1>
    <form action="agregar_plan" method="post">
      <div class="mb-8">
        <label for="txtId" class="form-label">Código</label>
        <input type="text" id="txtId" name="txtId" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtNombre" class="form-label">Nombre</label>
        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtPagoMensual" class="form-label">Pago Mensual</label>
        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos</label>
        <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes:</label>
        <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control">
      </div>
      <br>
      <div class="mb-8">
        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control btn btn-info" value="Guardar Plan">
      </div>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>