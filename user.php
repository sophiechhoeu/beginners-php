<?php


class User {

  public $age;
  private $password;

  public function __construct($age){
    $this->age = $age;
    $this->password = 'fjfjfjjfj';
  }
  public function getPassword($hint){
    if ($hint == 'getit'){
      return $this->password;
    } else {
      return 'You don\'t have permission';
    }
  }
}
