# Beginners php

- using mamp version 4.4.1
- root directory/htdocs/

- class = template for objects
- new instantiates all the code inside the class and makes an object and then assigns it to a variable
- function insides of a class, referred to as a method
- double underscores for constructors

```
<?php


class User {

  public $age = 0;

  public function __construct($age){
    $this->age = $age;
  }
  public function getAge(){
    echo 'Age:' . $this->age;
  }
}

$soph = new User(29);
$soph->getAge();
```
- this : refers to the overall object
- 29 gets passed into the constructor which gets passed into this age and then you call the method of the object(soph) will output the age.
- public functions are like global functions that are accessible everywhere
- private functions are only accessible within the class


```
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



$soph = new User(29);
echo $soph->getPassword('getit');


```
you can't access a private variable outside
try to return and echo out the password because we're passing in hint that doesn't match

where the class is isn't necessarily where you instantiate it- you create a new file

include the new file, the class is in a different file so it be reusable



### inheritance
users- administrators / members

roles

User
- Name
- Emails


administrators
- Permission Level

members
- Date Added


```
class Admin extends User{
  public $permissionLevel;

  public function __construct($name, $email, $type, $permissionLevel){
    parent::__construct($name, $email, $type);
    $this->permissionLevel = $permissionLevel;
  };

}
```

- extends User is basically utilises all the code within the user class, all we need to do now is differentiate the difference between classes ie permission levels

- need to set the constructure with the what identifiers we're after, inherent from the parent construct

- getType doesn't exist in the admin class it looks up at the user class because of admin extends user

if you make a getType method in admin class it will get that instead


```
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

```

this second getType method returns hello and then inherits from the parent get type to read the type of user. 
