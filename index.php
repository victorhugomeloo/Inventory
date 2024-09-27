<?php

require_once './vendor/autoload.php';

use Victor\Inventory\Routers\Loader;
// use Victor\Inventory\Models\Users\Users;

// $user = new Users();
// teste
// $data = [
//     'name' => "",
//     'email' => "victor@example.com",
//     'phone' => "35998655517",
//     'password' => password_hash('12236565', PASSWORD_DEFAULT),
// ];

// $user->create($data);

$loader = new Loader();
$loader->execute();