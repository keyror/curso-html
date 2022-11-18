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
                <form class="d-flex">
                    <input type="number" class="form-control" placeholder="200.000">
                    <span class="badge bg-primary mx-1 align-self-center"><strong> =< </strong></span>
                    <input type="number" class="form-control mx-2" placeholder="8.000.000">
                    <input class="form-control me-2" type="search" placeholder="Busca tu producto" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <?php include 'partials/footer.php'; ?>
    </div>
<?php include 'partials/scripts.php'; ?>
</body>
</html>