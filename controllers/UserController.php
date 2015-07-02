<?php

class UserController extends MasterController {

  public function getRegistrar() {
    $data['users'] = UserModel::all();
    View::load('usuario/registrar', $data);
  }

  public function postRegistrar($request) {
    $user = [
        'cedula' => $request['cedula'],
        'nombre' => $request['nombre'],
        'edad' => $request['edad']
    ];
    UserModel::save($user);

    Redirect::to('index.php?controller=user&action=registrar');
  }

  public function getEliminar() {
    echo "Estoy eliminando";
  }

  public function getIndex() {
    echo "voy al index<br>";
  }

}
