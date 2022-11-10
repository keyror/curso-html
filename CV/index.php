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
          <div class="col">
            <div class="card rounded text-center mt-4 border-primary">
              <div class="card-header bg-primary bg-gradient text-white">
                <h4>Biografía.</h4>
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod nulla nihil eligendi magni quae ad assumenda! Incidunt, inventore sunt consequatur accusantium fugiat nesciunt magni eum molestiae recusandae aspernatur provident mollitia? Provident, animi? Voluptatum incidunt deserunt a veritatis mollitia unde laboriosam, quisquam ea veniam quidem illum cupiditate at alias, vitae id.</p>
              </div>
            </div>
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