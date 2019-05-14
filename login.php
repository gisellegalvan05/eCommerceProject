  <?php require 'includes/nav.php'; ?>

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
