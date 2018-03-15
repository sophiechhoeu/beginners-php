<?php

include('user.php');


$user1 = new Member('Sophie','test@mail.com', 'march 14');
echo $user1->getType();

echo '<br><br>';


$user2 = new Admin('James', 'james@mail.com', 4);
echo $user2->getType();
