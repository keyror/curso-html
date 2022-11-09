<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png" alt="" width="40" height="32" class="d-inline-block align-text-bottom">
            Mi Página
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-outline-info active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mi portafolio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="btn btn-success" type="button" data-bs-toggle="modal" href="#contacto">Contactame</a>
              </li>
              <li class="nav-item">
               <!-- Example split danger button -->
                <div class="btn-group mx-2">
                  <a type="button" href="template.html" class="btn btn-danger">Action</a>
                  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav">
                <form class="d-flex mx-2">
                <input class="form-control me-2" type="search" placeholder="Buscador..." aria-label="Search" name="search">
                <button class="btn btn-success" type="submit">Buscar</button>
                </form>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark">Tienes 
                        <span class="bagde bg-danger rounded">10</span>  notificaciones
                    </button>
                </li>
                <li class="nav-item">
                  <a href="mi_perfil.html" class="btn btn-light text-dark mx-2">Camilo M. <i class="fa-solid fa-circle-user fa-1x"></i></a> 
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Camilo M. <i class="fa-solid fa-circle-user fa-1x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Configurar cuenta</a></li>
                      <li><a class="dropdown-item" href="#">Salir</a></li>
                    </ul>
                  </li>
              </div>
            </ul>
        </div>
    </nav>