  <?php require 'includes/nav.php'; ?>

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
            <div class="col-12 col-lg-6 col pb-0 center">
          <div class="account-login-inner">

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
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-12 col-lg-6 col pb-0 center">
              <div class="account-register-inner">
            <form method="post" class="">

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
              <p class="form-row form-row-wide"> <label for="reg_pais">País de Nacimiento&nbsp;<span class="required">*</span></label> <input type="text"
                  class="input-text" name="pais" id="reg_pais" autocomplete="pais"></p>

              <!-- FOMULARIO AVATAR -->
              <p class="form-row form-row-wide"> <label for="reg_avatar">Avatar&nbsp;<span class="required">*</span></label> <input type="text"
                  class="input-text" name="avatar" id="reg_avatar" autocomplete="avatar"></p>

                <!-- FOMULARIO SEXO -->
              <p class="form-row form-row-wide"> <label for="reg_sexo">Sexo&nbsp;<span class="required">*</span></label> <input type="text"
                  class="input-text" name="sexo" id="reg_sexo" autocomplete="sexo"></p>

              <!-- FOMULARIO ACEPTO TERMINOS -->
              <label class="">
                <input class="" name="terminos" type="checkbox" id="reg_terminos" value="forever"> <span>Acepto los términos y condiciones</span>
              </label>

              <!-- FOMULARIO CONTRASEÑA -->
              <p class="form-row form-row-wide"> <label for="reg_password">Contraseña&nbsp;<span class="required">*</span></label> <input type="password"
                  class="input-text" name="password" id="reg_password" autocomplete="new-password"></p>

            <!-- FOMULARIO CONFIRMAR CONTRASEÑA -->
            <p class="form-row form-row-wide"> <label for="reg_passwordConfirm">Confirmar Contraseña&nbsp;<span class="required">*</span></label> <input type="password"
                class="input-text" name="passwordConfirm" id="reg_passwordConfirm" autocomplete="passwordConfirm"></p>


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
