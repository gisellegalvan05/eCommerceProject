<?php
/**
 *
 */
class Usuario {

  // atributos

  public $email;
  public $nombre;
  public $apellido;
  public $pais;
  public $sexo;
  public $password;

  // metodos de clase

  static public function crearTabla() {
    $usuarios = [];
    $json = json_encode($usuarios);
    file_put_contents('data.json', $json);
  }

  static public function buscar($email) {
    $json = file_get_contents('data.json');
    $usuarios = json_decode($json, true);
    foreach ($usuarios as $usuario) {
      if ($usuario['email'] === $email) {
        return $usuario;
      }
    }
    return false;
  }

  // metodos de instancia

  function guardar() {
    $usuarioNuevo = [
      "email"    => $this->email,
      "nombre"   => $this->nombre,
      "apellido" => $this->apellido,
      "pais"     => $this->pais,
      "sexo"     => $this->sexo,
      "password" => password_hash($this->password, PASSWORD_DEFAULT),
    ];
    $json = file_get_contents('data.json');
    $usuarios = json_decode($json, true);
    $usuarios[] = $usuarioNuevo;
    $json = json_encode($usuarios, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $json);
  }

  function passwordValida($password) {
    return password_verify($password, $this->password);
  }

}

?>
