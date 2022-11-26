<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php' ?>
<title>¿ Quienes Somos ?</title>

<body>
    <?php include 'partials/navbar.php' ?>
    <div class="card mt-4 shadow rounded">
        <div class="card-body">
            <div class="row rounded mx-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="card-header bg-secondary text-white rounded shadow">
                                <h4>¿ Quienes Somos ?</h4>
                            </div>
                            <?php include 'quienessomos/quienes_somos_partials.php'; ?>
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