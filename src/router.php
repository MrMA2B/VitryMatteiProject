<?php

namespace App;

use App\controller\PostController;

class Router
{
    public function run()
    {
        
        $action = $_GET['action'] ?? null;
      
        if ($action=='read'){
            echo ('abc');
        
          
        } else {
            var_dump('hello');
            $_GET['action'] = 'read';
         
            include_once 'index.php';
        }
    }
}
