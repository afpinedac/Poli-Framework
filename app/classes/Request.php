<?php

class Request {
  
      static function isValid($request){
          return isset($request['controller']);
      }
}
