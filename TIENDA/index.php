<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'?>
<title>Tienda Online</title>
<body>
<?php include 'partials/navbar.php'?>
    <div class="card shadow rounded">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <?php include 'inicio/carrousel.php'; ?>
          </div>
        </div>
        <div class="row mt-4">
           <?php include 'inicio/cards.php' ?>
        </div>
      </div>
      <?php include 'partials/footer.php'; ?>
    </div>
<?php include 'partials/scripts.php'; ?>
</body>
</html>