<?php


//-----------DO NOT CHANGE ------------------------

//SERVER CONFIGURATIONS (It is not recommended change this values)
define("BASE_PATH",'localhost');
define("BASE_MODELS",'../modelos');
define("BASE_CONTROLLERS",'../controladores');
define("BASE_VIEWS",'../vistas');
define("BASE_CLASSES",'/clases');
define("BASE_CONFIG",'/config');
define("BASE_LOADERS",'/config/loaders');


//load first the MasterModel

//load the folders
$folders = [BASE_LOADERS , BASE_CLASSES , BASE_MODELS, BASE_CONTROLLERS];
foreach ($folders as $folder) {   
    
    foreach (glob(".{$folder}/*.php") as $file) {
        require  $file;
    }    
}


 
