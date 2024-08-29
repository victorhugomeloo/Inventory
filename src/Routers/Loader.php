<?php

namespace Victor\Inventory\Routers;

use CoffeeCode\Router\Router;
use Victor\Inventory\Routers\User\UserRouters;
use Victor\Inventory\Routers\Panel\Inventory\InventoryRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private InventoryRouters $inventoryRouter;

    public function __construct() {
        $this->router = new Router("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->inventoryRouter = new InventoryRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->inventoryRouter->execute();
        $this->router->dispatch();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
