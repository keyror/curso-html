<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'?>
<title>Detalle del producto</title>
<body>
<?php include 'partials/navbar.php'?>
    <div class="card mt-4 shadow rounded">
      <div class="card-body">
        <div class="row rounded mx-1">
          <div class="col">
           <?php include 'detalle/detalle_productos.php'; ?>
          </div>
        </div>
      </div>
      <?php include 'partials/footer.php'; ?>
    </div>
<?php include 'partials/scripts.php'; ?>
</body>
</html>