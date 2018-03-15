<?php


class User {

  public $name;
  public $email;
  public $type;

  public function __construct($name, $email, $type){
    $this->name = $name;
    $this->email = $email;
    $this->type = $type;
  }

  public function getType(){
    return $this->type;
  }
}

class Admin extends User{
  public $permissionLevel;

  public function __construct($name, $email, $type, $permissionLevel){
    parent::__construct($name, $email, $type);
    $this->permissionLevel = $permissionLevel;
  };

}

// User
// - Name
// - Emails
//
//
// administrators
// - Permission Level
//
// members
// - Date Added
