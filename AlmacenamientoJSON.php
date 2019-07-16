<?php

class AlmacenamientoJSON implements AlmacenamientoInterface{

  private $source = 'data.json';
  private $data;

  public function getSource()
  {
    $this->data= json_decode(file_get_contents($this->source), true);

    return $this->data;
  }

  public function insert(array $data = [])
  {
   $this->data[] = $data;

   $json = json_encode($this->data, JSON_PRETTY_PRINT);

   if (is_readable($this->source)) {
       file_put_contents($this->source, $json);
       return;
   }

   throw new Exception('El almacenamiento no pudo ser escrito');
   
  }

  public function getId()
  {
  return count($this->data)-1;
  }

}




 ?>
