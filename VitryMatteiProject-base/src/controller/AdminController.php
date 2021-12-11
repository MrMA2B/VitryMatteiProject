<?php

namespace App\controller;

use App\repository\AdminRepository;
use App\view\View;

class AdminController
{
    private $view;
    private $postRepository;

    public function __construct()
    {
        $this->view = new View();
        $this->AdminRepository = new AdminRepository();
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
            'Admin' => $this->AdminRepository->getId(),
            
        ]);
    }

    public function update(int $id) 
    {
        if ('PUT' === $_SERVER['REQUEST_METHOD']) {
            $this->AdminRepository->update($_POST);
        }

        $this->view->render('/post/update', [
            'post' => $this->postRepository->get($id),
        ]);
    }
}