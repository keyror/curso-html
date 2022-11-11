<!DOCTYPE html>
<html lang="es">
<?php include 'partials/head.php'; ?>
<title>Inicio</title>
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
                        <li class="breadcrumb-item active" aria-current="page">Mis Estudios</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="alert alert-info text-center" role="alert">
                  <h4>EDUCACIÓN</h4>
                </div>
            </div>
        </div>
        <div class="row mx-1">
          <div class="col">
            <div class="card text-center  border border-secondary">
                <div class="card-header bg-secondary bg-gradient text-white">
                    <h4>Estudios de primaria</h4>
                </div>
                <div class="card-body">
                    <i class="fa-solid fa-star fa-2x"></i>
                    <p><strong>Institución: </strong> Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit repellendus dolorem eius totam. Harum facilis alias labore maxime, commodi distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, mollitia temporibus fugit rerum modi a?</p>
                </div>
                <div class="card-footer">
                    2007 - 2014
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center  border border-secondary">
                <div class="card-header bg-secondary bg-gradient text-white">
                    <h4>Estudios de secundaria</h4>
                </div>
                <div class="card-body">
                    <i class="fa-solid fa-star fa-2x"></i>
                    <i class="fa-solid fa-star fa-2x"></i>
                    <p><strong>Institución: </strong> Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit repellendus dolorem eius totam. Harum facilis alias labore maxime, commodi distinctio! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam saepe recusandae velit cupiditate molestiae iste?</p>
                </div>
                <div class="card-footer">
                   2014 - 2018
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center  border border-secondary">
                <div class="card-header bg-secondary bg-gradient text-white">
                    <h4>Estudios profesional</h4>
                </div>
                <div class="card-body">
                    <i class="fa-solid fa-star fa-2x"></i>
                    <i class="fa-solid fa-star fa-2x"></i>
                    <i class="fa-solid fa-star fa-2x"></i>
                    <p><strong>Institución: </strong> Lorem ipsum dolor sit amet.</p>
                    <p><strong>Título: </strong> Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. tdfdfdfdfdsdssd codddddddnsectetur adipisicing elit. Rerum, quae quia dignissimos eveniet excepturi saepe!</p>
                </div>
                <div class="card-footer">
                    2018 - 2022
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