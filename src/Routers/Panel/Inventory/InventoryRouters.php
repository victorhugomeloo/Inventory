<?php

namespace Victor\Inventory\Routers\Panel\Inventory;

use CoffeeCode\Router\Router;

class InventoryRouters
{
    private Router $router;

    public function __construct(Router $router) 
    {
        $this->router = $router;
    }

    public function execute()
    {
        $this->router->namespace('Victor\Inventory\Controllers\Panel\Scheduler');

        $this->router->get("/panel/inventory/", 'Inventory:execute');

        $this->router->get("/panel/inventory/create", 'Create:execute');
    }

}