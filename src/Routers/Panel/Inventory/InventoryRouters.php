<?php

namespace Victor\Inventory\Routers\Panel\Invetory;

use Victor\Inventory\Router;

class InventoryRouters
{
    private Router $router;

    public function __construct(Router $router) 
    {
        $this->router = $router;
    }

    public function execute()
    {
        $this->router->namespace('Victor\Inventory\Controllers\Panel\Inventory');

        $this->router->get("/panel/inventory/", 'Inventory:execute');

        $this->router->get("/panel/inventory/create", 'Create:execute');
    }

}