<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('css/template.css'); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body style="background: #ffff;">
    <!--Sección de iconos-->
    <section
        style="background-color:rgb(255, 194, 10); height:40px; width:100%; display: flex; justify-content: center; align-items: center; gap: 15px;">
        <a href="" class="icon-img"><img src="<?= base_url('img/26.png') ?>"
                class="animate__animated animate__pulse animate__infinite infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/27.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/28.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/29.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite infinite" alt=""
                style="width: 28px; height: 28px;"></a>
        <a href=""><img src="<?= base_url('img/30.png') ?>" class="icon-img"
                class="animate__animated animate__pulse animate__infinite infinite" alt=""
                style="width: 28px; height: 28px;"></a>
    </section>

    <!--Nav-->
    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li>
            <header class="header">
                <img src="<?= base_url('img/logo1.png'); ?>" alt="">
            </header>
        </li>
        <li class="active"><a href="<?= base_url('/'); ?>" class="links">Inicio</a></li>
        <li><a href="<?= base_url('ver_clientes') ?>">Clientes</a></li>
        <li><a href="<?= base_url('ver_lineastelefonicas') ?>">Líneas Telefónicas</a></li>
        <li><a href="<?= base_url('ver_planes'); ?>">Planes</a></li>
        <li style="flex-grow: 1;">
            <form class="d-flex align-items-center" style="margin-top: 0; justify-content: flex-end; gap:10px;">
                <input class="form-control me-2 w-auto" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-warning" type="submit">Buscar</button>
            </form>
        </li>
    </ul>
</nav>


    <?php echo $this->renderSection("content") ?>

    <!--Pie de página-->
    <footer>
        <h6>Creado por Daylin Yol</h6>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    .swal2-actions {
        gap: 10px; 
    }
</style>

<script>
    document.querySelectorAll(".delete-button").forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault(); 

            const clientId = this.getAttribute("data-id"); 
            const deleteUrl = this.href;

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-info",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "¿Estás seguro?",
                text: "No podrás revertir esta acción.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(deleteUrl, { method: 'GET' }) 
                        .then(response => {
                            if (response.ok) {
                                swalWithBootstrapButtons.fire({
                                    title: "Eliminado!",
                                    text: "Se ha eliminado con éxito.",
                                    icon: "success"
                                }).then(() => {
                                    location.reload(); 
                                });
                            } else {
                                swalWithBootstrapButtons.fire({
                                    title: "Error",
                                    text: "No se pudo eliminar.",
                                    icon: "error"
                                });
                            }
                        })
                        .catch(() => {
                            swalWithBootstrapButtons.fire({
                                title: "Error",
                                text: "Ocurrió un problema al intentar eliminar.",
                                icon: "error"
                            });
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelado",
                        icon: "error"
                    });
                }
            });
        });
    });
</script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq5dW+Qq1rX21yjsP24rwtEPEwvndPKxErIap22r5F5v+vkLTG" crossorigin="anonymous"></script>
</body>

</html>
