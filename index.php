<?php

require_once './vendor/autoload.php';

use Victor\Inventory\Routers\Loader;

$loader = new Loader();
$loader->execute();