
  <?php require 'includes/nav.php';

session_start();
  $errors = [];

if(!empty($_POST)){

     if(empty($_POST['password'])){
       $errors['password'][] = 'El campo contraseña está vacío';
     }
     if(empty($_POST['passwordConfirm'])){
         $errors['paswword'][] = 'El campo de confirmación de contraseña está vacio';
     }
     if(($_POST['password']) < 8){
        $errors['password'][] = 'La contraseña debe tener al menos 8 caracteres';
    }
    if($_POST['password'] != $_POST['passwordConfirm']){
       $errors['passwordConfirm'][] = 'Las contraseñas no coinciden' ;
    }
    if ($_POST["nombre"] <8) {
    $errors[]="El nombre debe estar completo";
    }

    if (empty($_POST["apellido"])) {
      $errors[]= "El apellido debe estar completo";
    }
    if (!empty($_FILES["avatar"])) {
      $allowed =  ["gif", "png", "jpg", "jpeg"];
      $filename = $_FILES["avatar"]["name"];
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      if(!in_array($ext,$allowed) ) {
        $errors[]= 'Formatos válidos de imagen: .gif, .png, .jpg o .jpeg';
      }

      if($_FILES['avatar']['size']>3000000){
        $errors[]= 'Tamaño máximo permitido: 3MB';
      }

    }

}

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles-login.css">
  <title>HOME</title>
</head>
<body>
<div class="row login-container">
  <section id="login" class="center">
    <div class="lightbox-inner">
      <div class="row" id="customer_login">
        <ul class="nav nav-tabs width100" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h3>LOGIN</h3></a>
          </li>
          <li class="nav-item">
            <a class="nav-link uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h3>REGISTER</h3></a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-12 col pb-0 center">
          <div class="account-login-inner">
            <form class="" method="post" action="login.php">
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
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-12 col pb-0 center">
              <div class="account-register-inner">
            <form method="post" enctype="multipart/form-data" action="login.php">

              <!-- FOMULARIO EMAIL -->
              <p class="form-row form-row-wide"> <label for="reg_email">Email&nbsp;<span class="required">*</span></label> <input type="email"
                  class="input-text" name="email" id="reg_email" autocomplete="email" value=""></p>

              <!-- FOMULARIO NOMBRE -->
              <p class="form-row form-row-wide"> <label for="reg_nombre">Nombre&nbsp;<span class="required">*</span></label> <input type="text"
                  class="input-text" name="nombre" id="reg_nombre" autocomplete="nombre"></p>


              <!-- FOMULARIO APELLIDO -->
              <p class="form-row form-row-wide"> <label for="reg_apellido">Apellido&nbsp;<span class="required">*</span></label> <input type="text"
                  class="input-text" name="apellido" id="reg_apellido" autocomplete="apellido"></p>

                <!-- FOMULARIO PAIS DE NACIMIENTO -->
              <p class="form-row form-row-wide">
              <label for="reg_pais">País de nacimiento&nbsp;<span class="required">*</span></label>
              <select class="form-control"  name="pais" id="reg_pais">
              <option value="ar">Argentina</option>
              <option value="pry">Paraguay</option>
              <option value="ur">Uruguay</option>
              <option value="br">Brasil</option>
              <option value="pr">Perú</option>
              </select>
            </p>


              <!-- FOMULARIO AVATAR -->
              <p class="form-row form-row-wide"> <label for="reg_avatar">Seleccionar imagen&nbsp;<span class="required">*</span></label> <input type="file"
                  class="form-control-file" name="avatar" id="reg_avatar"></p>

                <!-- FOMULARIO SEXO -->
              <p class="form-row form-row-wide"> <label for="reg_sexo">Sexo&nbsp;<span class="required">*</span></label> <div class="custom-control custom-radio">
              <input type="radio" id="masculino" name="sexo" class="custom-control-input">
              <label class="custom-control-label" for="masculino">Masculino</label>
             </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="femenino" name="sexo" class="custom-control-input">
                <label class="custom-control-label" for="femenino">Femenino</label>
              </div></p>

              <!-- FOMULARIO ACEPTO TERMINOS -->
              <label class="">
                <input class="" name="terminos" type="checkbox" id="reg_terminos" value="forever"> <span>Acepto los términos y condiciones</span>
              </label>

              <!-- FOMULARIO CONTRASEÑA -->
              <p class="form-row form-row-wide"> <label for="reg_password">Contraseña&nbsp;<span class="required">*</span></label> <input type="password"
                  class="input-text" name="password" id="reg_password" autocomplete="new-password"></p>
                  <p><?=$errors['password'][0] ?? ''?></p>

            <!-- FOMULARIO CONFIRMAR CONTRASEÑA -->
            <p class="form-row form-row-wide"> <label for="reg_passwordConfirm">Confirmar Contraseña&nbsp;<span class="required">*</span></label> <input type="password"
                class="input-text" name="passwordConfirm" id="reg_passwordConfirm" autocomplete="passwordConfirm"></p>
                  <p><?=$errors['passwordConfirm'][0] ?? ''?></p>


              <div class="privacy-policy-text"></div>
              <p class="form-row"><button type="submit" class="btnLogin" name="register" value="Register">Registrarme</button></p>
            </form>
          </div>
            </div>
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
