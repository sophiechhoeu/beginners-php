<?php


class User {

  public $name;
  public $email;


  public function __construct($name, $email){
    $this->name = $name;
    $this->email = $email;

  }

  public function getType(){
    return $this->type;
  }
}

class Admin extends User{
  public $permissionLevel;
  public $type = 'Admin';

  public function __construct($name, $email, $permissionLevel){
    parent::__construct($name, $email);
    $this->permissionLevel = $permissionLevel;
  }

  public function getType(){
    return 'Hello from ' . parent :: getType();
  }
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
