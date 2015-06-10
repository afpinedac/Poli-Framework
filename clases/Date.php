<?php

class Date {
  
   
      //retun the date of today
      static function today(){
        return date("y-m-d");
      }
      
      
      //return the current moment
      static function now(){
        return date("Y-m-d H:i:s");
      }
  
}
