<?php

include('user.php');


$soph = new User(29);

echo $soph->getPassword('getit');
