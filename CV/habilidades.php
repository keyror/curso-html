<!DOCTYPE html>
<html lang="es">
<?php include 'partials/head.php'; ?>
<title>Inicio</title>
<body>
  <?php include 'partials/navbar.php'; ?>
  <div class="container-fluid">
    <div class="card mt-4 shadow rounded">
        <div class="card-header rounded text-center bg-secondary bg-gradient text-white">
            <h4>Habilidades / Skills</h4>
        </div>
      <div class="card-body">
        <div class="row rounded text-white mx-1">
          <div class="col">
          <ol class="list-group list-group-numbered">
                <?php include 'habilidades/list_group.php'; ?>
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