<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'?>
<title>Detalle factura</title>
<body>
<?php include 'partials/navbar.php'?>
    <div class="card mt-4 shadow rounded">
      <div class="card-body">
        <div class="row rounded mx-1">
          <div class="col-3"></div>
          <div class="col">
           <?php include 'factura/factura_detalle.php';?>
          </div>
          <div class="col-3"></div>
        </div>
      </div>
      <?php include 'partials/footer.php'; ?>
    </div>
<?php include 'partials/scripts.php'; ?>
</body>
</html>