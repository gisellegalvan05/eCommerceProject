<?php

class UsuarioValidador {
  private $usuario;
  private $errors=[];

  public function __construct(array $data)
  {
    $this->usuario=$data;
  }

  public function validate(){

    if (Usuario::buscar($this->usuario['email']) != false) {
        $this->errors['email']= 'El email ya está en uso';
    }

    if(!filter_var($this->usuario['email'], FILTER_VALIDATE_EMAIL)){
      $this->errors['email'] = 'El email no es valido';
    }

    if (empty($this->usuario['email'])) {
       $this->errors['email'] = "El campo email debe estar completo";
      }


    if (empty($this->usuario['nombre'])) {
      $this->errors['nombre']="El nombre debe estar completo";
    }

    if (empty($this->usuario['apellido'])) {
        $this->errors['apellido']= "El apellido debe estar completo";
    }

    if(empty($this->usuario['password'])){
           $this->errors['password']= 'El campo contraseña está vacío';
       }
    if(empty($this->usuario['passwordConfirm'])){
             $this->errors['paswword'] = 'El campo de confirmación de contraseña está vacio';
       }
    if(strlen($this->usuario['password']) < 8){
            $this->errors['password']= 'La contraseña debe tener al menos 8 caracteres';
      }

    if($this->usuario['password'] != $this->usuario['passwordConfirm']){
           $this->errors['passwordConfirm'] = 'Las contraseñas no coinciden' ;
      }
/*
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
*/

    if(isset($this->usuario['sexo'])){

      if($this->usuario['sexo'] != 'fm' && $this->usuario['sexo'] != 'ms'){
        $this->errors['sexo']= "La opción seleccionada es invalida";
        }
      }else {
         $this->errors['sexo']= "Debe seleccionar una opción";
      }

    if(empty($this->usuario['terminos'])){
        $this->errors['terminos']= "Debe aceptar los términos y condiciones";
    }

  }

  public function getErrors(){
    return $this->errors;
  }

  public function getError($field){
    return $this->errors[$field] ?? '';
  }

  public function isValid(){
    return empty($this->errors);
  }
}


 ?>
