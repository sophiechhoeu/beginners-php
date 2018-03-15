<?php

include('user.php');


$user1 = new User('Sophie','test@mail.com','Member');

echo $user1->getType();
