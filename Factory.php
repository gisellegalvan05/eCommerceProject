<?php

require 'AlmacenamientoDB.php';
require 'AlmacenamientoJSON.php';

 class Factory {

   private static $objects = [

     'storages' => [
       'json' => AlmacenamientoJSON::class,
       'db' => AlmacenamientoDB::class,
     ],
   ];

  private function __construct(){}

  public static function get($key, $subkey)
  {
    return new self::$objects[$key][$subkey];
  }

 }

 ?>
