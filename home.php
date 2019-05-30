
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
     <h2 class="titulo-division">About us</h2>
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
              <img   class="img-firstCarousel" class="d-block w-100" src="imgs/eCommerce/banner/banner2.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img  class="img-firstCarousel" class="d-block w-100" src="imgs/eCommerce/banner/local1.png" alt="Second slide">
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
           <h2 class="titulo-division">Nuestras sucursales</h2>
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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            </article>
          </div>
        </div>
        </section>
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

    <!-- Es lo que copie de la pagina>-->
  <section class="widget widget_blog_subscription">
   <form action="#" method="post" accept-charset="utf-8" id="subscribe-blog">
     <p>¡Suscribite y obtené $300 para tu primera compra!
      Recibí nuestras promociones exclusivas y enterate de todas las novedades del mundo de la moda
     </P>
     <p>Suscribite a nuestro newsletter</p>

     <p>
       <input type="text" name="email" style="width: 95%; padding: 1px 2px" placeholder="Ingresá tu e-mail" value="" id="subscribe-field">
     </p>
     <p>
       <input type="submit" value="Suscribir">
     </p>
   </form>
  </section>

<!--Este es otro ejemplo que busque :>-->

 <a href="#" id="back-to-top" title="Subir"></a><footer class="newfooter">
<!-- <vtex.cmc:newsletterOptIn/> -->
<div id="footerNewsletter" class="col-newsletter"><div class="conteiner-newsletter">
<form id="homenl" action="javascript:FormValidate();" method="POST" enctype="multipart/form-data" novalidate="novalidate">
  <h3 class="newsletter-title">Suscribite a nuestro newsletter</h3>
  <div id="newsletter">
  <fieldset> <input id="email" name="email" type="text" value="" placeholder="Ingresá tu e-mail" size="30" /> </fieldset>
  <fieldset class="full"><input type="submit" id="btn-submit" class="btn" name="btn-submit" value="OK" /> </fieldset></div>
  <div id="nl_message_loading" class="alert alert-info" style="display:none;">Cargando...</div>
  <div id="nl_message_validate" class="alert alert-warning" style="display:none;">Este campo es obligatorio.</div>
  <div id="nl_message_success" class="alert alert-success" style="display:none;">Gracias por suscribirte a nuestro newsletter! </div>
  <div id="nl_message_error" class="alert alert-danger" style="display:none;">Se detectó un error, por favor revisá que tu mail sea el correcto.</div>
</form></div></div>
<!-- hasta aca -->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
