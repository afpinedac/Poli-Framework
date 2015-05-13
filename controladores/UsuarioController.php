<?php

class UsuarioController extends MasterController {
  
  
  public function getRegistrar(){
      echo "estoy registrando :)x|S";
    
  }
  
  
   public function postRegistrar(){
      echo "estoy registrando";
    
  }
  
   public function getEliminar(){
      echo "estoy eliminando";
    
  }
  
  public function getIndex(){
      echo "voy al index<br>";
    
  }
  
   
  
  
}


/*
require './modelo/conexion.php';
require './vistas/include/header.php';

if (isset($_GET['action'])) {
  $action = $_GET['action'];

  if ($action == 'registrar') {
    $departamentos = DepartamentoM::getAll();
    require './vistas/usuario/registrar.php';
  }
} else {
  header('location:usuario.php?action=registrar');
}
 * 
 * */
 