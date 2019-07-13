<?php session_start();

require 'includes/nav.php';
require 'src/Entities/usuario.php';
require 'src/Validators/UsuarioValidador.php';

if(!empty($_POST)){

  $validator=new UsuarioValidador($_POST);
  $validator->validate();

  if(!empty($validator->isValid())){
    $usuarioBD = new Usuario();

    $usuarioBD->nombre   = $_POST['nombre'];
    $usuarioBD->apellido = $_POST['apellido'];
    $usuarioBD->pais     = $_POST['pais'];
    $usuarioBD->sexo     = $_POST['sexo'];
    $usuarioBD->email    = $_POST['email'];
    $usuarioBD->password = $_POST['password'];

    try {
       $usuarioBD->guardar();
   header('location: login.php');
    } catch (\Exception $e) {
      die($e->getMessage());
    }
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
<div class="row justify-content-center register-container">
<section id="register">
<h3 class="text-center titleLogin">REGISTER</h3>
<div class="col-12 col pb-0">
<div class="form-register-container">
<form method="post" enctype="multipart/form-data" action="register.php">
    <!-- FOMULARIO EMAIL -->
    <p class="form-row form-row-wide"> <label for="reg_email">Email&nbsp;<span class="required">*</span></label> <input type="email"
    class="input-text" name="email" id="reg_email" autocomplete="email" value="<?=$_POST['email'] ?? ''?>"></p>
    <p class="alerta"><?php if(isset($validator)) {
          echo $validator->getError('email');
        }?></p>
    <!-- FOMULARIO NOMBRE -->
    <p class="form-row form-row-wide"> <label for="reg_nombre">Nombre&nbsp;<span class="required">*</span></label> <input type="text"
    class="input-text" name="nombre" id="reg_nombre" autocomplete="nombre" value="<?=$_POST['nombre'] ?? ''?>"></p>
    <p class="alerta"><?php if(isset($validator)) {
        echo $validator->getError('nombre');
      }?></p>
    <!-- FOMULARIO APELLIDO -->
    <p class="form-row form-row-wide"> <label for="reg_apellido">Apellido&nbsp;<span class="required">*</span></label> <input type="text"
    class="input-text" name="apellido" id="reg_apellido" autocomplete="apellido" value="<?=$_POST['apellido'] ?? ''?>"></p>
    <p class="alerta"><?php if(isset($validator)) {
        echo $validator->getError('apellido');
      }?></p>
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
    <p class="form-row form-row-wide"> <label for="reg_avatar">Seleccionar imagen&nbsp;<span class="required">*</span></label>
    <input type="file" class="form-control-file" name="avatar" id="reg_avatar"></p>
      <!-- FOMULARIO SEXO -->
    <p class="form-row form-row-wide"> <label for="reg_sexo">Sexo&nbsp;<span class="required">*</span></label> <div class="custom-control custom-radio">
    <input type="radio" id="masculino" name="sexo" class="custom-control-input" value="ms">
    <label class="custom-control-label" for="masculino">Masculino</label>
     </div>
    <div class="custom-control custom-radio">
    <input type="radio" id="femenino" name="sexo" class="custom-control-input" value="fm">
    <label class="custom-control-label" for="femenino">Femenino</label>
              </div></p>
              <p class="alerta"><?php if(isset($validator)) {
          echo $validator->getError('sexo');
        }?></p>
              <!-- FOMULARIO CONTRASEÑA -->
              <p class="form-row form-row-wide"> <label for="reg_password">Contraseña&nbsp;<span class="required">*</span></label> <input type="password"
                  class="input-text" name="password" id="reg_password" autocomplete="new-password"></p>
                  <p class="alerta"><?php if(isset($validator)) {
            echo $validator->getError('password');
          }?></p>

            <!-- FOMULARIO CONFIRMAR CONTRASEÑA -->
      <p class="form-row form-row-wide"><label for="reg_passwordConfirm">Confirmar Contraseña&nbsp;<span class="required">*</span></label><input type="password"
          class="input-text" name="passwordConfirm" id="reg_passwordConfirm" autocomplete="passwordConfirm"></p>
          <p class="alerta"><?php if(isset($validator)) {
        echo $validator->getError('passwordConfirm');
      }?></p>

          <!-- FOMULARIO ACEPTO TERMINOS -->
          <label class="">
            <input class="" name="terminos" type="checkbox" id="reg_terminos" value="forever" <?= (isset($_POST["terminos"])) ?  "checked" : '';?>><span>Acepto términos y condiciones</span><br>
            <a href="terminos-condiciones.php" target="_new"
             > Ver términos y condiciones</a>
          </label>
          <p class="alerta"><?php if(isset($validator)) {
          echo $validator->getError('terminos');
        }?></p>


          <div class="privacy-policy-text"></div>
          <p class="form-row"><button type="submit" class="btnSubmit" name="register" value="Register">Registrarme</button></p>
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
