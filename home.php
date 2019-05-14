
    <?php require 'includes/nav.php'; ?>

    <?php require 'includes/banner.php' ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>HOME</title>
</head>

<body>
<section class="about">
  <div class="row">
    <div class="col-12">
     <h2 class="titulo">About us</h2>
    </div>
    <div class="col-12 col-md-6">
      <article class="fondo-parrafo">
        <h2>Nosotros</h2>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      </article>
    </div>
    <div class="col-12 col-md-6">
      <article class="about-us-slide">
        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img   class="img-firstCarousel" class="d-block w-100" src="imgs/eCommerce/banner/local.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img  class="img-firstCarousel" class="d-block w-100" src="imgs/eCommerce/banner/local1.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img  class="img-firstCarousel" class="d-block w-100" src="imgs/eCommerce/banner/local3.png" alt="Second slide">
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
  </section>


      <section class="sucursales">
        <div class="row">
          <div class="col-12">
           <h2 class="titulo">Nuestras sucursales</h2>
          </div>
          <div class="col-12 col-md-6">
            <article class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1859350918708!2d-58.4458324850543!3d-34.54884736210327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436f18dc22f%3A0x36090a5d367889c6!2sAv.+Monroe+860%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1557446253096!5m2!1ses!2sar"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </article>
          </div>
          <div class="col-12 col-md-6">
            <article class="fondo-parrafo">
              <h2>Sucursales</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            </article>
          </div>
        </div>
        </section>
    </div>



    <!-- Modal Carrito -->
    <div class="modal fade" id="carritoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Carrito vacío
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal: lo pense para viewports grandes, para celular solo usar slide  -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Colección</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="imagen container">
                    <img src="imgs/img1.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="imagen container">
                    <img src="imgs/img1.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row login-container">
      <section id="login" class="center">
        <div class="lightbox-inner">
          <div class="row" id="customer_login">
            <div class="col-12 col-lg-6 col pb-0 center">
              <div class="account-login-inner">
                <h3 class="uppercase">Login</h3>
                <form class="" method="post">
                  <p class="form-row form-row-wide"> <label for="username">Nombre de usuario o email&nbsp;<span class="required">*</span></label> <input type="text" class="input-text" name="username" id="username" autocomplete="username" value="">
                  </p>
                  <p class="form-row form-row-wide"> <label for="password">Contraseña&nbsp;<span class="required">*</span></label> <input class="input-text" type="password" name="password" id="password" autocomplete="current-password"></p>
                  <p class="form-row">
                    <button type="submit" class="btnLogin" name="login" value="Log in">Log in</button>
                    <label class="">
                      <input class="" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Recordarme</span>
                    </label>
                  </p>
                  <p class="lostPassword"> <a href="#">Olvidé mi contraseña</a></p>
                </form>
              </div>
            </div>
            <div class="col-12 col-lg-6 col pb-0 center">
              <div class="account-register-inner">
                <h3 class="uppercase">Registrarme</h3>
                <form method="post" class="">
                  <p class="form-row form-row-wide"> <label for="reg_email">Email&nbsp;<span class="required">*</span></label> <input type="email"
                      class="input-text" name="email" id="reg_email" autocomplete="email" value=""></p>
                  <p class="form-row form-row-wide"> <label for="reg_password">Contraseña&nbsp;<span class="required">*</span></label> <input type="password"
                      class="input-text" name="password" id="reg_password" autocomplete="new-password"></p>
                  <div class="privacy-policy-text"></div>
                  <p class="form-row"><button type="submit" class="btnLogin" name="register" value="Register">Registrarme</button></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>