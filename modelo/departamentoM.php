<?php

class DepartamentoM extends MasterModel{
  
  public static function insert($data){
    return query("INSERT INTO departamento(nombre) VALUES('{$data['nombre']}')");    
  }
  
  public static function getAll(){
    return query("SELECT * FROM departamento");
  }
  
  public static function delete($id){
    return query("DELETE FROM departamento WHERE id=$id");
  }
  
  public static function find($id){
    $result = query("SELECT * FROM departamento WHERE id=$id");
    return mysql_fetch_assoc($result);
    
  }
  public static function update($data){
    $query = "UPDATE departamento SET nombre='{$data['nombre']}' WHERE id='{$data['id']}'";
    return query($query);
    
  }
  
}
