<?php session_start(); ?>


<?php require 'includes/nav.php';

 $errors = [];

if(!empty($_POST)){

$json =file_get_contents('data.json');

$usuarios = json_decode($json, true);

foreach($usuarios as $usuario){
  if($usuario['email'] === $_POST['email']){
   $errors['email'][] = 'El email ya está en uso';
      }
    }

if (empty($_POST['email'])) {
 $errors['email'][] = "El campo email debe estar completo";
  }

if (FILTER_VAR($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE) {
   $errors['email'][] = "No es el formato correcto";
}

    if (empty($_POST['nombre'])) {
    $errors['nombre'][]="El nombre debe estar completo";
    }

    if (empty($_POST['apellido'])) {
      $errors['apellido'][]= "El apellido debe estar completo";
    }

    if(empty($_POST['password'])){
         $errors['password'][] = 'El campo contraseña está vacío';
       }
    if(empty($_POST['passwordConfirm'])){
           $errors['paswword'][] = 'El campo de confirmación de contraseña está vacio';
       }
    if(strlen($_POST['password']) < 8){
          $errors['password'][] = 'La contraseña debe tener al menos 8 caracteres';
      }

    if($_POST['password'] != $_POST['passwordConfirm']){
         $errors['passwordConfirm'][] = 'Las contraseñas no coinciden' ;
      }

    if (!empty($_FILES["avatar"])) {
      $allowed =  ["gif", "png", "jpg", "jpeg"];
      $filename = $_FILES["avatar"]["name"];
      $ext = pathinfo($filename, PATHINFO_EXTENSION);

      if(!in_array($ext,$allowed) ) {
        $errors['avatar'][]= 'Formatos válidos de imagen: .gif, .png, .jpg o .jpeg';
      }

      if($_FILES['avatar']['size']>3000000){
        $errors['avatar'][]= 'Tamaño máximo permitido: 3MB';
      }

    }


    if(isset($_POST['sexo'])){

      if($_POST['sexo'] != 'fm' && $_POST['sexo'] != 'ms'){
      $errors['sexo'][] = "La opción seleccionada es invalida";
        }
      }else {
       $errors['sexo'][] = "Debe seleccionar una opción";
      }



    if(empty($_POST['terminos'])){
      $errors['terminos'][] = "Debe aceptar los términos y condiciones";
    }

    //array_merge($_POST, [
    //'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)]);

    if (empty($errors)) {

     $json = file_get_contents('data.json');

     $usuarios = json_decode($json,true);


     $usuarios[] = [
         "email" => $_POST['email'],
         "nombre"=>  $_POST['nombre'],
         "apellido"=>  $_POST['apellido'],
         "pais"=>   $_POST['pais'],
         "sexo"=>   $_POST['sexo'],
         "password"=>  password_hash($_POST['password'],PASSWORD_DEFAULT),
         "register"=>   $_POST['register']
       ];


     $json = json_encode($usuarios, JSON_PRETTY_PRINT);

     file_put_contents('data.json', $json);

     header('location: login.php');

    }

}

$paises = [
"ar" => "Argentina",
"br" => "Brasil",
"ch" => "Chile",
"uy" => "Uruguay",
"pry"=> "Paraguay"
];


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
            <a class="nav-link uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h3>REGISTER</h3></a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-12 col pb-0 center">
              <div class="account-register-inner">
            <form method="post" enctype="multipart/form-data" action="register.php">

              <!-- FOMULARIO EMAIL -->
              <p class="form-row form-row-wide"> <label for="reg_email">Email&nbsp;<span class="required">*</span></label> <input type="email"
              class="input-text" name="email" id="reg_email" autocomplete="email" value="<?=$_POST['email'] ?? ''?>"></p>
              <p class="alerta"><?= $errors['email'][0] ?? '' ?></p>

              <!-- FOMULARIO NOMBRE -->
              <p class="form-row form-row-wide"> <label for="reg_nombre">Nombre&nbsp;<span class="required">*</span></label> <input type="text"
                  class="input-text" name="nombre" id="reg_nombre" autocomplete="nombre" value="<?=$_POST['nombre'] ?? ''?>"></p>
                      <p class="alerta"><?=$errors['nombre'][0] ?? ''?></p>


              <!-- FOMULARIO APELLIDO -->
              <p class="form-row form-row-wide"> <label for="reg_apellido">Apellido&nbsp;<span class="required">*</span></label> <input type="text"
                  class="input-text" name="apellido" id="reg_apellido" autocomplete="apellido" value="<?=$_POST['apellido'] ?? ''?>"></p>
                  <p class="alerta"><?=$errors['apellido'][0] ?? ''?></p>

                <!-- FOMULARIO PAIS DE NACIMIENTO -->
              <p class="form-row form-row-wide">
              <label for="reg_pais">País de nacimiento&nbsp;<span class="required">*</span></label>
              <select class="form-control"  name="pais" id="reg_pais">
             <?php foreach ($paises as $value => $pais) : ?>
               <?php if ($_POST['pais'] == $value) : ?>
              <option value="<?=$value?>" selected>
                  <?=$pais?>
              </option>
            <?php else : ?>
               <option value="<?=$value?>">
                 <?=$pais?>
               </option>
             <?php endif; ?>
             <?php endforeach; ?>
              </select>
            </p>


              <!-- FOMULARIO AVATAR -->
              <p class="form-row form-row-wide"> <label for="reg_avatar">Seleccionar imagen&nbsp;<span class="required">*</span></label> <input type="file"
                  class="form-control-file" name="avatar" id="reg_avatar"></p>

                <!-- FOMULARIO SEXO -->
              <p class="form-row form-row-wide"> <label for="reg_sexo">Sexo&nbsp;<span class="required">*</span></label> <div class="custom-control custom-radio">
              <input type="radio" id="masculino" name="sexo" class="custom-control-input" value="ms"  <?php if ($_POST["sexo"] == "ms") echo "checked";?>>
              <label class="custom-control-label" for="masculino">Masculino</label>
             </div>
              <div class="custom-control custom-radio">
              <input type="radio" id="femenino" name="sexo" class="custom-control-input" value="fm"  <?php if ($_POST["sexo"] == "fm") echo "checked";?> >
              <label class="custom-control-label" for="femenino">Femenino</label>
              </div></p>
              <p class="alerta"><?=$errors['sexo'][0] ?? ''?></p>


              <!-- FOMULARIO CONTRASEÑA -->
              <p class="form-row form-row-wide"> <label for="reg_password">Contraseña&nbsp;<span class="required">*</span></label> <input type="password"
                  class="input-text" name="password" id="reg_password" autocomplete="new-password"></p>
                  <p class="alerta"><?=$errors['password'][0] ?? ''?></p>

            <!-- FOMULARIO CONFIRMAR CONTRASEÑA -->
      <p class="form-row form-row-wide"><label for="reg_passwordConfirm">Confirmar Contraseña&nbsp;<span class="required">*</span></label><input type="password"
          class="input-text" name="passwordConfirm" id="reg_passwordConfirm" autocomplete="passwordConfirm"></p>
          <p class="alerta"><?=$errors['passwordConfirm'][0] ?? ''?></p>

          <!-- FOMULARIO ACEPTO TERMINOS -->
          <label class="">
            <input class="" name="terminos" type="checkbox" id="reg_terminos" value="forever"><span>Acepto términos y condiciones</span><br>
            <a href="terminos-condiciones.php" target="_new"
             > Ver términos y condiciones</a>
          </label>
          <p class="alerta"><?= $errors['terminos'][0] ?? ''?></p>

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
