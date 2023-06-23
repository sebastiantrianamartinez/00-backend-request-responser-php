<?php
  define("ROOT", dirname(__FILE__, 3));
  require_once ROOT .'/core/lib/responser.php';
  class search{
    private $array;
    public function __construct(){
      $this->array = ["sebastian", "juan", "sofia", "pedro", "luis"];
    }

    public function search($name){
      foreach($this->array as $keys => $listName){
        if($listName === $name){
          return responser::systemResponse(200, "Matches were found", ["id" => $keys]);
        }
        return responser::systemResponse(204, "Matches not found", NULL);
      }
    }
    
  }
