<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
    <br>
    <a class="btn text-white btn-warning shadow-lg p-3 mb-3 bg-body rounded" href="<?= base_url('/'); ?>" role="button"><i class="bi bi-arrow-bar-left"> Regresar</i></a>
    <a class="btn btn-info shadow-lg p-3 mb-3 bg-body rounded" href="<?= base_url('nuevas_lineastelefonicas'); ?>" role="button"><i class="bi bi-telephone-fill"></i> Agregar</a>
       <h1 style="color:#4f4f4f; margin-top: 0;">Líneas Telefónicas</h1>
    <div class="table-responsive">
        <table class="table table-border table-striped table-hover table-dark shadow-lg p-3 mb-5 bg-body rounded">
            <thead>
                <tr class="bg-secondary">
                    <th>Número de Tel.</th>
                    <th>Fecha de Pago</th>
                    <th>Meses de Atraso</th>
                    <th>Plan ID</th>
                    <th>Cliente ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $lineastelefonicas): ?>
                    <tr>
                        <td><?php echo $lineastelefonicas['no_telefono']; ?></td>
                        <td><?php echo $lineastelefonicas['fecha_pago']; ?></td>
                        <td><?php echo $lineastelefonicas['meses_atraso']; ?></td>
                        <td><?php echo $lineastelefonicas['plan_id']; ?></td>
                        <td><?php echo $lineastelefonicas['cliente_id']; ?></td>
                        <td>
                            <a href="<?= base_url('actualizar_lineastelefonicas/') . $lineastelefonicas['no_telefono']; ?>" class="btn btn-info">
                                <i class="bi bi-pencil-square"> Actualizar</i>
                            </a>
                            <a href="<?= base_url('eliminar_lineastelefonicas/').$lineastelefonicas['no_telefono'];?>" class="btn btn-danger delete-button" data-id="<?= $lineastelefonicas['no_telefono'];?>">
                                <i class="bi bi-trash-fill"> Eliminar</i></a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->endSection(); ?>
