<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php' ?>
<title>Área de soporte</title>

<body>
    <?php include 'partials/navbar.php' ?>
    <div class="card mt-4 shadow rounded">
        <div class="card-body">
            <div class="row rounded mx-1">
                <div class="col">
                    <div class="card rounded shadow">
                        <div class="card-body">
                            <div class="card-header mb-4 shadow bg-secondary rounded text-white text-center">
                                <h4 class="card-title"><i class="fa-solid fa-map-location-dot"></i> Rastrea tu pedido</h4>
                            </div>
                            <div class="row align-items-center">
                                <div class="col"></div>
                                <div class="col-4">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Introduce tu código de rastreo" aria-label="Search">
                                        <a href="soporte.php" class="btn btn-success" role="button"><i class="fa-solid fa-magnifying-glass"></i> Buscar</a>
                                    </form>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
    <?php include 'partials/scripts.php'; ?>
</body>

</html>