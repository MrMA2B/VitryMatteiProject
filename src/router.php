<?php

namespace App;

use App\controller\VoitureController;

class Router
{
    public function run()
    {
        
        
        $getAction = $_GET['action'] ?? null;
       
        if ($getAction=='read'){
           
            $voitureController = new VoitureController();
            return $voitureController->readAll();
          
        }else  if ($getAction=='update'){
           $immat=$getAction = $_GET['immat'] ?? null;
           
            $voitureController = new VoitureController();
            return $voitureController->update($immat);
          
        }else  if ($getAction=='create'){
           
            if(isset($_POST)){


                $newCar = array(
                    "immat" => $_POST['immat'],
                    "marque" => $_POST['marque'],
                    "modele" => $_POST['modele'],
                    "color" => $_POST['color'],
                    "dateDeProduction" => (new \DateTime())->format('Y-m-d H:i:s'),
                    
                );
            }
             $voitureController = new VoitureController();
             return $voitureController->create($newCar);
           
        }else  if ($getAction=='delete'){
           
            if(isset($_POST)){
                $immat = $_POST['immat'];
            }
            
             $voitureController = new VoitureController();
             return $voitureController->delete($immat);
        } else {
            $_GET['action']='read';
         
            include 'index.php';
        }
    }
}
