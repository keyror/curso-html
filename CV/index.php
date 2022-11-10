<!DOCTYPE html>
<html lang="es">
<?php include 'partials/head.php'; ?>
<title>Inicio</title>
<body>
  <?php include 'partials/navbar.php'; ?>
  <div class="container-fluid">
    <div class="card mt-4 shadow rounded">
      <div class="card-body">
        <div class="row row-img rounded text-white mx-1">
          <div class="col">
            <?php include 'partials/portada.php'; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <?php include 'partials/accordion_menu.php'; ?>
          </div>
          <div class="col-6">
            <?php include 'partials/menu_categorias.php'; ?>
          </div>
        </div>
      </div>
      <?php include 'partials/footer.php'; ?>
    </div>
    <!-- Modal -->
    <?php include 'partials/modal_contacto.php'; ?>
  </div>
  <!----script js bootstrap-->
  <?php include 'partials/scripts.php'; ?>
  <!----end script js bootstrap-->
</body>

</html>