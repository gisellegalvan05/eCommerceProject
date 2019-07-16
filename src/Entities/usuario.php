<?php
class Usuario {

  // atributos

  public $email;
  public $nombre;
  public $apellido;
  public $pais;
  public $sexo;
  public $password;

  // metodos de clase

  // conectar a la base
static public function conectar() {
    return new PDO('mysql:dbname=ecommerce;host=127.0.0.1;port=3306', 'root', '');
  }

  static public function crearTabla() {
    $base = self::conectar();
    $base->query('create table usuarios (
      nombre varchar(50),
      apellido varchar(50),
      pais varchar(2),
      sexo varchar(2),
      email varchar(100),
      password varchar(100),
      primary key (email)
    )');
  }

  static public function buscar($email) {

    $base = self::conectar();
    // buscar registro con email = $email
    $consulta = $base->prepare('select * from usuarios where email = :email');
    $consulta->execute([
      ':email' => $email
    ]);

    $resultado = $consulta->fetch();
    if ($resultado) {
      // si hubo un resultado
      // crear un objeto de la clase usuario y devolver el objeto
      $usuario = new self();
      $usuario->nombre   = $resultado['nombre'];
      $usuario->apellido = $resultado['apellido'];
      $usuario->pais     = $resultado['pais'];
      $usuario->sexo     = $resultado['sexo'];
      $usuario->email    = $resultado['email'];
      $usuario->password = $resultado['password'];
      return $usuario;
    } else {
      // si no se encontro nada, devolver false
      return false;
    }
  }

  // metodos de instancia



    // preparar un insert de un registro
    public function guardar(AlmacenamientoInterface $storage) {

    $storage->getSource();

    if($storage instanceof AlmacenamientoDB) {
       $sql = 'INSERT INTO usuarios(nombre, apellido, pais, sexo, email, password) VALUES (:nombre, :apellido, :pais, :sexo, :email, :password)';

       $storage->setQuery($sql);
     }

     $storage->insert([
       "nombre"   => $this->nombre,
       "apellido" => $this->apellido,
       "pais"     => $this->pais,
       "sexo"     => $this->sexo,
       "email"    => $this->email,
       "password" => password_hash($this->password, PASSWORD_DEFAULT),
     ]);

      return $storage->getId();
    }

   function passwordValida($password) {
     return password_verify($password, $this->password);
     }

   }


?>
