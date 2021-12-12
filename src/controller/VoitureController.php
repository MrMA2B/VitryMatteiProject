<?php

namespace App\controller;

use App\repository\VoitureRepository;
use App\view\View;

class VoitureController
{
    private $view;
    private $voitureRepository;

    public function __construct()
    {
        $this->view = new View();
        $this->voitureRepository = new VoitureRepository();
    }

    public function create(array $row)
    {
       
        $this->voitureRepository->create($row);
        
        
        $this->view->render('/post/read', [
            'voitures' => $this->voitureRepository->getVoitures(),
            
        ]);
    }

    public function delete(string $immat)
    {
        
        $this->voitureRepository->delete($immat);
        
        
        $this->view->render('/post/read', [
            'voitures' => $this->voitureRepository->getVoitures(),
            
        ]);
    }

  


    public function readAll()
    {
        $this->view->render('/post/read', [
            'voitures' => $this->voitureRepository->getVoitures(),
            
        ]);
    }

    public function update(string $immat) 
    {
         
        $this->voitureRepository->update($immat);
        
        
        $this->view->render('/post/read', [
            'voitures' => $this->voitureRepository->getVoitures(),
            
        ]);
    }
}