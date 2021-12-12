<?php

namespace App\model;

class Post
{
    private $Id;
    private $Nom;
    private $Prenom;
    private $Mdp;

    public function getId(): string
    {
        return $this->Id;
    }

    public function setId(string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
 
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}