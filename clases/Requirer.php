<?php

//class to load files

class Requirer {
  
  public static function load($path){
      require "/$path.php";
    
  }
  
}
