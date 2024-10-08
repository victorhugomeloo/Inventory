<?php
namespace Victor\Inventory\Controllers\User;

use Victor\Inventory\Helpers\Template\Loader;

class Login
{
    private Loader $template;

    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {
        $this->template->render("user/login", false);
    }
}