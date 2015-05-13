<?php


class MasterModel {
    
   protected $engine= 'mysql';
   protected $server = 'localhost';
   protected $user = 'root';
   protected $password = '';
   protected $database = 'empresa';
   protected $link;
   
   
   public function connect(){
       $this->link = mysql_connect($this->server, $this->user, $this->password);
       mysql_select_db($this->database);       
   }
    
    public function query($sql){        
       $this->connect();
        
       try{ 
            if(($data = mysql_query($this->sanitize($query)))){  
                 $this->close();
                 return $data;
            }else{
                throw new Exception("Error");                 
            }
       }catch(Exception $e){
           echo $e->getMessage ." ". mysql_errno();           
       }finally{
           $this->close();           
       }            
        
    }
    
    public function close(){
        mysql_close($this->link);
    }
    
    public function sanitize($sql){
        return mysql_escape_string($sql);
    }
    
}

