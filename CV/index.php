<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----end css bootstrap-->
    <link rel="stylesheet" href="css/mystyle.css">
    <!----script fontawesome-->
    <script src="https://kit.fontawesome.com/80573cd677.js" crossorigin="anonymous"></script>
    <!----end script fontawesome-->

    <title>Template</title>
</head>
<body>
  <?php include 'partials/navbar.php'; ?>
    <div class="container-fluid">
      <div class="card mt-4 shadow rounded">
        <div class="card-body">
          <div class="row">
              <div class="col-10">
                <?php include 'partials/carrousel.php'; ?>              
              </div>
              <div class="col-2">
              <?php include 'partials/menu_lateral.php'; ?>     
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!----end script js bootstrap-->
</body>
</html>