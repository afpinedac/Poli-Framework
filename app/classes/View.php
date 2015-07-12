<?php

class View {

  public static function load($path, $data = []) {
    extract($data);   //every key now is a variable :)
    require __DIR__ . "/../../views/include/header.php";
    require __DIR__ . "/../../views/$path.tpl";
    require __DIR__ . "/../../views/include/footer.php";
  }

}
