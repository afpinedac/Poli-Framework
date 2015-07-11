<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DB {

  protected static $conn = array(
      'driver' => 'pdo_mysql',
      'host' => '127.0.0.1',
      'dbname' => 'empresa',
      'user' => 'root',
      'password' => 'root',
      'port' => '8889'
  );
  protected static $manager;

  public static function load() {
    $isDevMode = true;
    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/../../models"), $isDevMode, null, null, false);
    static::$manager = EntityManager::create(static::$conn, $config);
  }

  public static function manager() {
    return static::$manager;
  }
  
}

DB::load();
