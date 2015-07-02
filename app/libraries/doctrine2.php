<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../../models"), $isDevMode, null, null, false);


$conn = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'empresa',
    'user' => 'root',
    'password' => 'root',
    'port' => '8889'
);
$entityManager = EntityManager::create($conn, $config);
