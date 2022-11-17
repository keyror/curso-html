<!DOCTYPE html>
<html lang="es">
<?php include 'partials/head.php'; ?>
<title>Cursos</title>
<body>
  <?php include 'partials/navbar.php'; ?>
  <div class="container-fluid">
    <div class="card mt-4 shadow rounded">
      <div class="card-body">
      <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cursos realizados</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <?php include 'cursos/carrousel.php'?>
          </div>
          <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col">
                <?php include 'cursos/detalles.php'; ?>
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