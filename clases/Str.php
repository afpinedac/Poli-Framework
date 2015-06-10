<?php

class Str {
  
  
    static function sanitize($str){
      return htmlentities($str);
    }
}
