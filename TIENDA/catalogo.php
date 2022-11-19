<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php'?>
<title>Catálogo</title>
<body>
<?php include 'partials/navbar.php'?>
    <div class="card mt-4 shadow rounded">
      <div class="card-body">
        <div class="row rounded text-white mx-1">
          <div class="col">
            <div class="card-header bg-secondary shadow rounded">
            <?php include 'catalogo/buscador.php'; ?>
            </div>
          </div>
        </div>
        <div class="row mx-1 mt-4">
          <div class="col-4">
              <?php include 'catalogo/filtro.php'; ?>
          </div>
          <div class="col-8">
             <?php include 'catalogo/listado_productos.php';?>
          </div>
        </div>
      </div>
      <?php include 'partials/footer.php'; ?>
    </div>
<?php include 'partials/scripts.php'; ?>
</body>
</html>