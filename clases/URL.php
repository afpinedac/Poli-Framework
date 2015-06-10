<?php

class URL {
      
      public static function to($url){
          $data = split("/", $url);
          
          $controller = $data[0];
          $action = isset($data[1]) ? $data[1] : 'index';
          if(isset($data[2])){
            $params = implode("/", $data[2]);            
          }
          return "index.php?controller=$controller/$action/$params";
      }
  
    
}
