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
                          <div id="carouselExampleCaptions" class="carousel slide  carousel-fade" data-bs-ride="carousel">
                              <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                              </div>
                              <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                  <img src="https://www.lucushost.com/blog/wp-content/uploads/2019/10/bootstrap.png" class="d-block w-100 img-fluid" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>Primer slider</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                  </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                  <img src="https://www.lucushost.com/blog/wp-content/uploads/2019/10/bootstrap.png" class="d-block w-100 img-fluid" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>Segundo slider</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                  </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                  <img src="https://www.lucushost.com/blog/wp-content/uploads/2019/10/bootstrap.png" class="d-block w-100 img-fluid" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>Tercer slider</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                  </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                  <img src="https://www.lucushost.com/blog/wp-content/uploads/2019/10/bootstrap.png" class="d-block w-100 img-fluid" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>Cuarto slider</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                  </div>
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
              </div>
              <div class="col-2">
                  <div class="list-group my-4 shadow">
                    <a href="#books" class="list-group-item list-group-item-action">Listado de libros</a>
                    <a href="#categorys" class="list-group-item list-group-item-action">listado de categorias</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A disabled link item</a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-4">
                <div class="accordion shadow my-4" id="books">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h5><i class="fa-solid fa-book"></i> - Juego de Tronos  <h6><span class="badge bg-info mx-2">Nuevo!!</span></h6></h5> 
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                      <div class="accordion-body">
                          <div class="alert alert-info" role="alert">
                              Para comprar este libro <a href="https://getbootstrap.com/docs/5.0/components/alerts/" class="btn btn-info"><strong>Clic aquí</strong></a>
                          </div>
                          <div class="row">
                              <div class="col-4">.
                                  <div class="text-center">
                                      <img class="shadow rounded img-fluid"  src="https://1.bp.blogspot.com/-T6cUgtsWKAc/W_3X-1_oMHI/AAAAAAABDas/qQTWY0FiYpMUBDp3Qf-cBC_x8gM8Bjl2wCLcBGAs/s1600/George%2BR%2BR%2BMartin%2Banticipa%2Bla%2Bprecuela%2Bde%2BJuego%2Bde%2BTronos-1.jpg" alt="">
                                      <br>
                                      <span class="bagde bg-info text-white rounded shadow p-1">$ 250.000</span>
                                  </div>
                              </div>
                              <div class="col-8">
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias cumque aspernatur reiciendis quia dolores sed nostrum excepturi consequatur temporibus dolore.</p>
                                
                                    <button type="button" class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                    <button type="button" class="btn btn-success"><i class="fa-solid fa-cart-arrow-down"></i></button>
                                
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                          Accordion Item #4
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <ol class="list-group list-group-numbered my-4 shadow" id="categorys">
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Acción</div>
                      Cantidad disponible :
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Aventura</div>
                      Cantidad disponible :
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Terror</div>
                      Cantidad disponible :
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                  </li>
                </ol>
              </div>
            </div>
        </div>
          <div class="card-footer text-center">
              <small>Derechos reservados 2022</small>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="contacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-danger shadow">
              <h5 class="modal-title" id="exampleModalLabel">Contactame</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-6"> 
                  <img src="" alt="">
                  <div class="mapouter"><div class="gmap_canvas"><iframe width="323" height="323" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:323px;width:323px;}</style><a href="https://www.embedgooglemap.net">how to copy and paste google maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:323px;width:323px;}</style></div></div>
                  <div class="row"> 
                    <div class="col">
                      <p class="my-2 px-2 border-start border-primary border-3"><strong> Email:</strong> email@gmail.com</p>
                      <p class="px-2 border-start border-primary border-3"><strong> Tel:</strong> 32158787448</p>
                    </div> 
                  </div>
                </div>
                <div class="col">
                    <form action="">
                      <i class="fa-solid fa-font"></i>
                      <input class="my-2 border border-primary rounded" type="text" placeholder="Introduzca su nombre completo" name="nombreCompleto">
                      <br>
                      <i class="fa-solid fa-inbox"></i>
                      <input class="my-2 border border-primary rounded" type="email" placeholder="Introduzca su correo" name="email">
                      <br>
                      <i class="fa-regular fa-circle-question"></i>
                      <input class="my-2 border border-primary rounded" type="text" placeholder="Asunto" name="asunto">
                      <textarea class="my-2 border border-primary rounded" name="contenido"  cols="30" rows="10">Introduzca su contenido</textarea>
                    </form>
                </div>
              </div>
            </div>
            <div class="modal-footer bg-danger">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>
    </div>
 <!----script js bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!----end script js bootstrap-->
</body>
</html>