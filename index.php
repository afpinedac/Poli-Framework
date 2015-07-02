<?php

require './vendor/autoload.php';

class MasterController {

  private static $defaultMethod = 'index';
  private static $defaultController = 'App';
  private static $controllerSuffix = 'Controller';

  static function init() {
    //load the application's controllers/classes/models.       
    require 'app/config/bootstrap/boot.php';
  }

  static function execute($request) {
    static::init();

    if (!static::isValidRequest($request)) {
      App::abort(0);
    }

    $controller = isset($request['controller']) ? ucfirst($request['controller']) : ucfirst(static::$defaultController);
    $controller.=static::$controllerSuffix;
    $action = isset($request['action']) ? $request['action'] : static::$defaultMethod;

    //check if the request is GET/POST
    $isPost = $_SERVER['REQUEST_METHOD'] == 'POST';

    $method = ($isPost) ? 'post' : 'get';
    $method.= ucfirst($action);


    //create a new object and call the respective method
    $ctr = new $controller();
    $ctr->{$method}(static::getParams($request));
  }

  static function isValidRequest($request) {
    return (!isset($request['controller']) && !isset($request['action'])) || isset($request['controller']);
  }

  static function getParams($request) {
    unset($request['controller']);
    unset($request['action']);
    return $request;
  }

}

MasterController::execute($_REQUEST);






