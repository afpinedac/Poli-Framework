<?php

class ProductController  {

  public function __construct() {
    
  }

  public function getIndex() {
    //  require './app/libraries/doctrine2.php';
    $productName = "pastas" . time();
    $product = new Product();
    $product->setName($productName);
    DB::manager()->persist($product);
    DB::manager()->flush();
    //$entityManager->persist($product);
    //$entityManager->flush();
    //hahah

    echo "product created {$product->getId()}";
  }

  public function getList() {

    $productRepository = DB::manager()->getRepository('Product');
    $products = $productRepository->findAll();
    foreach ($products as $product) {
      echo $product->getName() . "<br>";
    }
  }

  public function getOne($request) {

    $product = DB::manager()->find('Product', $request['id']);
    if ($product) {
      echo $product->getName() . "<br>";
    }
  }

  public function getChangeName($request) {
    $product = DB::manager()->find('Product', $request['id']);
    if ($product) {
      $product->setName('fijol');
      DB::manager()->flush();
    }
  }

}
