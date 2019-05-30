<?php session_start(); ?>

<?php require 'includes/nav.php' ?>
<?php

function redirect($url){
header('location: ' . $url);
}

$errors =[];

  if (!empty($_POST)) {

    if (empty($errors)) {

      $json =file_get_contents('data.json');

      $usuarios = json_decode($json, true);

      foreach($usuarios as $usuario){
        if($usuario['email'] === $_POST['email'] && (password_verify($_POST['password'],$usuario['password'])==TRUE)){
         $_SESSION['email'] = $usuario['email'];
         redirect('home.php');
        }
        else{
           $errors['password'][] = 'Las contraseñas no coinciden';
            $errors['email'][] = 'El email no es correcto';
        }
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
            <a class="nav-link uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h3>LOGIN</h3></a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-12 col pb-0 center">
              <div class="account-login-inner">
            <form method="post" enctype="multipart/form-data" action="login.php">

              <!-- FOMULARIO EMAIL -->
              <p class="form-row form-row-wide"> <label for="log_email">Email&nbsp;<span class="required">*</span></label> <input type="email"
                  class="input-text" name="email" id="log_email" autocomplete="email" value=""></p>
                  <p class="alerta"><?=$errors['email'][0] ?? ''?></p>


              <!-- FOMULARIO CONTRASEÑA -->
              <p class="form-row form-row-wide"><label for="log_password">Contraseña&nbsp;<span class="required">*</span></label><input type="password"
                  class="input-text" name="password" id="log_password" autocomplete="new-password"></p>
                  <p class="alerta"><?=$errors['password'][0] ?? ''?></p>


              <div class="privacy-policy-text"></div>
              <p class="form-row"><button type="submit" class="btnLogin" name="login" value="Login">Login</button></p>
            </form>
            <div class="link-registro">
              <h6>Si aún no te registraste, hacelo <a href="register.php">acá</h6>
              </h3>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
