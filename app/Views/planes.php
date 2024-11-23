<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
    <div class="container">
        <br>
        <a class="btn text-white btn-warning shadow-lg p-3 mb-3 bg-body rounded" href="<?= base_url('/'); ?>" role="button"><i class="bi bi-arrow-bar-left"> Regresar</i></a>
        <a class="btn btn-info shadow-lg p-3 mb-3 bg-body rounded" href="<?= base_url('nuevo_plan'); ?>" role="button"><i class="bi bi-calendar2-date-fill"></i> Agregar</a>

        <h1 style="color:#4f4f4f; margin-top: 0;">Planes</h1>
        <div class="table-responsive">
            <table class="table table-border table-striped table-hover table-dark shadow-lg p-3 mb-5 bg-body rounded">
                <thead>
                    <tr class="bg-secondary">
                        <th>Plan ID</th>
                        <th>Nombre</th>
                        <th>Pago Mensual</th>
                        <th>Cantidad Minutos</th>
                        <th>Cantidad Mensajes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $planes) :
                    ?>
                    <tr>
                        <td><?php echo $planes['plan_id']; ?></td>
                        <td><?php echo $planes['nombre']; ?></td>
                        <td><?php echo $planes['pago_mensual']; ?></td>
                        <td><?php echo $planes['cantidad_minutos']; ?></td>
                        <td><?php echo $planes['cantidad_mensajes']; ?></td>
                        <td>
                            <a href="<?= base_url('actualizar_planes/').$planes['plan_id']; ?>" class="btn btn-info"><i class="bi bi-pencil-square"> Actualizar</i></a>
                            <a href="<?= base_url('eliminar_planes/').$planes['plan_id']; ?>" class="btn btn-danger delete-button" data-id = "<?= $planes['plan_id'];?>"><i class="bi bi-trash-fill"> Eliminar</i></a>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<?php echo $this->endSection(); ?>
