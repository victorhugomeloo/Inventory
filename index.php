<?php

require_once './vendor/autoload.php';

session_start();

use Victor\Inventory\Routers\Loader;
// use Victor\Inventory\Models\Users\Users;

// $user = new Users();

// $data = $user->findAll();

// var_dump($data);

$loader = new Loader();
$loader->execute();