<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'?>
<title>Metodo de pago</title>
<body>
<?php include 'partials/navbar.php'?>
    <div class="card mt-4 shadow rounded">
      <div class="card-body">
        <div class="row rounded justify-content-center">
          <div class="col-6">
            <?php include 'pago/metodo_pago.php'; ?>
          </div>
        </div>
      </div>
      <?php include 'partials/footer.php'; ?>
    </div>
<?php include 'partials/scripts.php'; ?>
</body>
</html>