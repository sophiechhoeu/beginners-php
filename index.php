<?php

include('user.php');


$user1 = new Admin('Sophie','test@mail.com', 3);

echo $user1->getType();
