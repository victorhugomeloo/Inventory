<?php
namespace Victor\Inventory\Helpers\Template;

class Loader
{
    //C:\xampp\htdocs\src\Helpers\Template/../../view
    //C:\xampp\htdocs\src\views
    public function render($template, $default = true, $data = []) 
    {
        foreach($data as $key => $value ){
            ${$key} = $value;
        }

        if ($default) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/header.php"));    
        }

        require_once(realpath(dirname(__FILE__) . "/../../views/$template.php"));    
    
        if ($default) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/footer.php"));    
        }
    }
}