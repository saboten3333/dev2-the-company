<?php

include "../classes/User.php";

// create an object / instantiate
$user = new User;

$user->store($_POST);
