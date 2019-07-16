<?php

class AlmacenamientoDB implements AlmacenamientoInterface {

  private $source;

  private $sql;

  public function setQuery($sql) {
    $this->sql = $sql;
  }

  public function getSource()
  {
     $this->source= Usuario::conectar();
  }

  public function insert(array $data = [])
  {
   $stmt = $this->source->prepare($this->sql);

   foreach ($data as $key => $value) {
     $stmt->bindValue($key, $value);
   }

   $stmt->execute();
  }

  public function getId()
  {
   return $this->source->lastInsertId();
  }

}



 ?>
