<?php

//-----------DO NOT CHANGE ------------------------
//SERVER CONFIGURATIONS (It is not recommended change this values)
define("BASE_PATH", 'localhost');
define("BASE_MODELS", 'models');
define("BASE_CONTROLLERS", 'controllers');
define("BASE_VIEWS", 'views');
define("BASE_CLASSES", 'app/classes');
define("BASE_CONFIG", 'app/config');

//load first the MasterModel
//load the folders
$folders = [ BASE_CLASSES, BASE_MODELS, BASE_CONTROLLERS];
foreach ($folders as $folder) {
  foreach (glob("{$folder}/*.php") as $file) {
    require $file;
  }
}



 
