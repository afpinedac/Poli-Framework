<?php
require './modelo/conexion.php';
require './vistas/include/header.php';


if (isset($_GET['action'])) {
  $action = $_GET['action'];
  if ($action == 'registrar') {
    $isPost = count($_POST) > 0;
    if ($isPost) {
      $data = [
          'nombre' =>  $_POST['nombre']
      ];
      DepartamentoM::insert($data);
      header("location:departamento.php?action=listar");
    } else {
      require './vistas/departamento/registrar.php';
    }
  } else if ($action == 'listar') {
    $departamentos = DepartamentoM::getAll();
    require './vistas/departamento/listar.php';
  } else if($action == 'delete'){
      $id = $_GET['id'];
      DepartamentoM::delete($id);
      header('location:departamento.php?action=listar');
  }else if($action == 'update'){
    $isPost = count($_POST)>0;
    if($isPost){
      $data = [
          'id' => $_POST['id'],
          'nombre' => $_POST['nombre']
      ];
      DepartamentoM::update($data);
      header('location:departamento.php?action=listar');
    }else{
      $id = $_GET['id'];
      $departamento = DepartamentoM::find($id);
      require './vistas/departamento/actualizar.php';
    }
  }
  
} else {
  header("location:departamento.php?action=listar");
}


require './vistas/include/footer.php';



