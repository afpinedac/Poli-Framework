<?php

class ProductController extends MasterController {

  public function getIndex() {
    require './app/libraries/doctrine2.php';
    $productName = "pastas" . time();
    $product = new Product();
    $product->setName($productName);
    $entityManager->persist($product);
    $entityManager->flush();

    echo "product created {$product->getId()}";
  }

}
