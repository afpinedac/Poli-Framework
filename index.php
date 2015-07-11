<?php

require './vendor/autoload.php';



$router = new Phroute\Phroute\RouteCollector(new \Phroute\Phroute\RouteParser);



$router->get('/test', function() {
  echo 'pasa';
});
$router->get('/', function() {
  echo 'indice';
});

$router->addRoute('GET', 'empresa/user/{id}?', function($id = null) {
  echo 'second';
});

 $router->controller('product', 'ProductController');


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Print out the value returned from the dispatched function
//echo $response;



/*

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

MasterController::execute($_REQUEST);*/






