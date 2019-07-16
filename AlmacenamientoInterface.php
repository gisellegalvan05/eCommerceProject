<?php

interface AlmacenamientoInterface {

//acceso al sistema de almacenamiento
public function getSource();

//datos a almacenar
public function insert(array $data = []);

//devuelve ID del elemento guardado
public function getId();

}

 ?>
