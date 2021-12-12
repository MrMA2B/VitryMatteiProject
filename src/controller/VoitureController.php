<?php

namespace App\controller;

use App\repository\VoitureRepository;
use App\view\View;

class VoitureController
{
    private $view;
    private $postRepository;

    public function __construct()
    {
        $this->view = new View();
        $this->VoitureRepository = new VoitureRepository();
    }

    public function create()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->postRepository->create($_POST);
        }
        
        $this->view->render('/post/create');
    }

  


    public function readAll()
    {
        $this->view->render('/post/read', [
            'voitures' => $this->VoitureRepository->getVoitures(),
            
        ]);
    }

    public function update(int $id) 
    {
        if ('PUT' === $_SERVER['REQUEST_METHOD']) {
            $this->VoitureRepository->update($_POST);
        }

        $this->view->render('/post/update', [
            'post' => $this->postRepository->get($id),
        ]);
    }
}