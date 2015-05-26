<?php

class AppController{
    
    
    public function getIndex(){
        echo "voy a mostrar el index";
        
    }
    
    
    public function postLogin($params){
        
        //si existe un usuario con esa contraseña con ese tipo
       if(Auth::validate($params['user'] , $params['pass'], $params['type'])){           
           Redirect::to($type."/index/");
        }else{
            Redirect::to("app/index");
            
        }
        
        
    }
    
}