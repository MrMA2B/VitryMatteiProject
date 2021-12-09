<?php

namespace App;

use App\controller\PostController;

class Router
{
    public function run()
    {
        
        $action = $_GET['action'] ?? null;
      
        if ($action=='test'){
            var_dump('Ceci est la page test');
            echo ("<a href='http://vitrymatteiproject-base/?action=read'>Accueil</a>");
            echo ("<a href='http://vitrymatteiproject-base/?action=admin'>Se connecter</a>");
                
        } else if {
            
            $_REQUEST['action']='read';
            var_dump('Ceci est la page d\'accueil');
            
            //include_once 'index.php';
        } else if {
            
            $_REQUEST['action']='admin';
            var_dump('Ceci est la page d\'administrateur');
            
            //include_once 'index.php';
        }
    }
}
