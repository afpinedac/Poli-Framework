<?php

class UsuarioController extends MasterController {

    public function getRegistrar() {
        //implementation of Decorator pattern desing
        $data['users'] = UsuarioModel::all();
        var_dump($data);
        View::load('usuario/registrar', $data);
    }

    public function postRegistrar($request) {
        
       $user = [
           'cedula' => $request['cedula'],
           'nombre' => $request['nombre'],
           'edad' => $request['edad']           
       ];
       
       UsuarioModel::save($user);
        
        
    }

    public function getEliminar() {
        echo "Estoy eliminando";
    }

    public function getIndex() {
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
 