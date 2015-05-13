<?php

class MasterController {

  static function init(){
        //load the application's data/classes/models. 
        require './config/boot.php';
        
        var_dump($directories);
  }
    
  static function execute($request) {          
      
    static::init();
    
    $controller = $request['controller']."Controller";
    $action = $request['action'];    
    
    //check if the request is GET/POST
    $isPost = $_SERVER['REQUEST_METHOD'] == 'POST';
        
    $method = ($isPost)? 'post' : 'get';    
    
    //set the first letter un uppercase
    $method.= ucfirst($action);
    
    //create a new object and call the respective method
    $ctr = new $controller();
    $ctr->{$method}();   

  }

}
MasterController::execute($_REQUEST);






