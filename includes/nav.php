
<header>
  <nav  class="navbar  fixed-top navbar-expand-lg  navbar-dark">
    <a class="navbar-brand" href="home.php"><img src="imgs/logotipo4.png" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Colecciones</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="mujer.php">Mujer</a>
    <a class="dropdown-item" href="hombre.php">Hombre</a>
    <a class="dropdown-item" href="ninio.php">Niños</a>
</li>
          <?php if (!empty($_SESSION) && (isset($_SESSION['email']))) : ?>
        <li class="nav-item">
          <a id="link-carrito" class="nav-link" href="carrito.php">Carrito</a>
          <style type="text/css">
            #link-carrito{display:}
          </style>
        </li>
          <?php else :?>
            <li class="nav-item">
              <a id="link-carrito" class="nav-link" href="carrito.php" >Carrito</a>
              <style type="text/css">
                #link-carrito{display:none}
              </style>
            </li>
        <?php endif;  ?>
      </ul>
      <ul class=" navbar-nav my-2 my-lg-0">
        <?php if (!empty($_SESSION) && (isset($_SESSION['email']))) : ?>
          <li class="nav-item">
              <a class="nav-link" id="link-login" href="login.php" >Iniciar sesión</a>
              <style type="text/css">
                #link-login{display: none;}
               </style>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" id="link-logout">Cerrar sesión</a>
            <style type="text/css">
              #link-logout {display: inline;}
             </style>
          </li>
        <?php else :?>
        <li class="nav-item">
        <a  class="nav-link" href="login.php" id="link-login">Iniciar sesión</a>
        <style type="text/css">
        #link-login {display: inline;}
       </style>
      </li>
        <li class="nav-item">
        <a  class="nav-link" href="logout.php" id="link-logout">Cerrar sesión</a><style type="text/css">
          #link-logout {display: none;}
         </style> </li>
    <?php endif;  ?>


      </ul>
    </div>
  </nav>
</header>




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
