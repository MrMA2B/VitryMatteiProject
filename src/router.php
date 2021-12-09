<?php

namespace App;

use App\controller\VoitureController;

class Router
{
    public function run()
    {
        
        $action = $_GET['action'] ?? null;
      
        if ($action=='read'){
            echo ('abc');
            $voitureController = new VoitureController();
            return $voitureController->readAll();
          
        } else {
            var_dump('hello');
            $_GET['action'] = 'read';
         
            include_once 'index.php';
        }
    }
}
/*
            if ('post' === $route && $action) {
                $postController = new PostController();
                if('read'===$action){
                    return $postController->read();
                }else if('create'===$action){
                    return $postController->create();
                }
              
               
            } elseif ('contact' === $route) {
                var_dump('contact');
            }
        } else {


            */