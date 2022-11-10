<!DOCTYPE html>
<html lang="es">
<?php include 'partials/head.php'; ?>
<title>Inicio</title>
<body>
  <?php include 'partials/navbar.php'; ?>
  <div class="container-fluid">
    <div class="card mt-4 shadow rounded">
      <div class="card-body">
        <div class="row bg-primary bg-gradient rounded text-white">
          <div class="col">
            <section class="py-5 text-center container">
              <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                  <h1 class="fw-light">Camilo Mancipe</h1>
                  <p>Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                  <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                  </p>
                </div>
              </div>
            </section>
          </div>
          <!--- <div class="col-2">
                <?php // include 'partials/menu_lateral.php'; 
                ?>     
              </div> --->
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