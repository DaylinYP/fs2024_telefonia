<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <br>
    <a class="btn text-white btn-warning shadow-lg p-3 mb-3 bg-body rounded" href="<?= base_url('/'); ?>" role="button"><i class="bi bi-arrow-bar-left"> Regresar</i></a>
    <a class="btn btn-info shadow-lg p-3 mb-3 bg-body rounded" href="<?= base_url('nuevo_cliente'); ?>" role="button"><i class="bi bi-person-add"> Agregar</i></a>
    <h1 style="color:#4f4f4f; margin-top: 0;">Clientes</h1>
    <div class="table-responsive">
        <table class="table table-border table-striped table-hover table-dark shadow-lg p-3 mb-3 bg-body rounded">
            <thead>
                <tr class="bg-secondary">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Calle Avenida</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $clientes) :
                ?>
                    <tr>
                        <td>
                            <?php echo $clientes['cliente_id']; ?>
                        </td>
                        <td>
                            <?php echo $clientes['nombre'] . " " . $clientes['apellido'] ?>
                        </td>
                        <td>
                            <?php echo $clientes['correo_electronico']; ?>
                        </td>
                        <td>
                            <?php echo $clientes['calle_avenida'] . " " . $clientes['no_casa'] . " zona " . $clientes['zona']; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('actualizar_clientes/') . $clientes['cliente_id']; ?>" class="btn btn-info"><i class="bi bi-pencil-square"> Actualizar</i></a>
                            <a href="<?= base_url('eliminar_clientes/') . $clientes['cliente_id']; ?>" class="btn btn-danger delete-button" data-id="<?= $clientes['cliente_id']; ?>">
                                <i class="bi bi-trash-fill"> Eliminar</i>
                            </a>
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