<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<h2>Bienvenid@!</h2>
<h5>Por favor selecciona una opción para continuar.</h5>

<div class="d-flex justify-content-around align-items-center botones-telefonia">
    <a href="<?= base_url('ver_clientes'); ?>" class="btn btn-info d-flex align-items-center" style="height: 45px;">
        <i class="bi bi-person-circle" style="font-size: 1.5rem; margin-right: 8px;"></i> Clientes
    </a>

    <a href="<?= base_url('ver_lineastelefonicas'); ?>" class="btn btn-info d-flex align-items-center" style="height: 45px;">
        <i class="bi bi-telephone-fill" style="font-size: 1.5rem; margin-right: 8px;"></i> Telefonías
    </a>

    <a href="<?= base_url('ver_planes'); ?>" class="btn btn-info d-flex align-items-center" style="height: 45px;">
        <i class="bi bi-calendar2-date-fill" style="font-size: 1.5rem; margin-right: 8px;"></i> Planes
    </a>
</div>


<?php echo $this->endSection(); ?>