<?php
namespace Victor\Inventory\Controllers\Panel\Inventory;

use Victor\Inventory\Helpers\Template\Loader;

class Create
{
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        echo "tela de criação";
    }

}