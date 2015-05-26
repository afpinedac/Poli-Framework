<?php

session_start();

class Auth {

  //check is the user is logged
  public static function check() {
    return isset($_SESSSION['isLogged']) ? $_SESSION['isLogged'] : false;
  }

  public static function logout() {
    session_destroy();
  }

  //validate and set the session variables
  public static function validate($user, $pass, $type) {

    //check if exists a user with that $user, $pass and $type
    $_SESSION['isLogged'] = true;
    $_SESSION['userName'] = $user['name'];
    $_SESSION['userType'] = $user['rol'];
  }

}
