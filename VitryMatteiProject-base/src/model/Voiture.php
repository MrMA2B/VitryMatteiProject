<?php

namespace App\model;

class Voiture
{

   


    private  $immat;
    private  $marque;
    private  $modele;
    private $color;
    private  $isSold;
    private  $dateAchat = null;
    private $dateVoiture;
    private $kilometre;


    
    public function getImmat()
    {
        return $this->immat;
    }

    public function setImmat(string $immat)
    {
        $this->immat = $immat;

        return $this;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque(string $marque)
    {
        $this->marque = $marque;

        return $this;
    }
 
    public function getModele()
    {
        return $this->modele;
    }

    public function setModele(string $modele)
    {
        $this->modele = $modele;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    public function getIsSold()
    {
        return $this->isSold;
    }
 
    public function setIsSold(string $isSold)
    {
        $this->isSold = $isSold;

        return $this;
    }
 
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    public function setDateAchat(string $dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateVoiture()
    {
        return $this->dateVoiture;
    }

    public function setDateVoiture(string $dateVoiture)
    {
        $this->dateVoiture = $dateVoiture;

        return $this;
    }

    public function getKilometre()
    {
        return $this->kilometre;
    }

    public function setKilometre(int $kilometre)
    {
        $this->kilometre = $kilometre;

        return $this;
    }
}
