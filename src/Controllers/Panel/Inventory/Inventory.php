<?php
namespace Victor\Inventory\Controllers\Panel\Inventory;

use Victor\Inventory\Helpers\Template\Loader;

class Inventory
{
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        echo "Listagem de agendamentos";
    }

}