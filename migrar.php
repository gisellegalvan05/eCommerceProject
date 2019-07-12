<?php

require 'usuario.php';

Usuario::crearTabla();

$json = file_get_contents('data.json');
$usuarios = json_decode($json, true);
foreach ($usuarios as $usuarioJson) {

  $usuarioBD = new Usuario();

  $usuarioBD->nombre   = $usuarioJson['nombre'];
  $usuarioBD->apellido = $usuarioJson['apellido'];
  $usuarioBD->pais     = $usuarioJson['pais'];
  $usuarioBD->sexo     = $usuarioJson['sexo'];
  $usuarioBD->email    = $usuarioJson['email'];
  $usuarioBD->password = $usuarioJson['password'];

  $usuarioBD->guardar();

}

?>
