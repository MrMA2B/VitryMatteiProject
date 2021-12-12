<?php

namespace App\repository;

use App\Database;
use App\model\Voiture;

class VoitureRepository extends Database
{
    public function getVoitures()
    {
         
        $query=$this->createQuery('SELECT * FROM voiture');
        $values=$query->fetchAll(\PDO::FETCH_ASSOC);
       
      
        $voitures= array();
        for ($i=0;$i<sizeof($values);$i++){
            $voitures[$i]=$this->buildObject($values[$i]);
        }
        return $voitures;
    
    }

  

    public function create(array $data)
    {
        $this->createQuery("INSERT INTO `voiture` (`immat`, `marque`, `modele`, `color`, `sold`, `dateAchat`, `dateVoiture`, `kilometre`, `imagePath`) 
        VALUES ('".$data['immat']."', '".$data['marque']."', '".$data['modele']."', '".$data['color']."', '0', NULL, '2021-12-02', '0', 'base.jpg');");
    }


    public function delete(string $immat)
    {
        $this->createQuery("
            DELETE FROM `voiture` WHERE `voiture`.`immat` = '".$immat."'");
    }

    public function update(string $immat)
    {
        $this->createQuery(
            "UPDATE `voiture` SET `sold` = '1', `dateAchat` = '".(new \DateTime())->format('Y-m-d H:i:s')."' WHERE `voiture`.`immat` = '".$immat."';");
    }

    private function buildObject(array $row): Voiture
    {
        $post = new Voiture;
        $post->setModele($row['modele']);
        $post->setMarque($row['marque']);
        $post->setKilometre($row['kilometre']);
        $post->setIsSold($row['sold']);
        $post->setImmat($row['immat']);
 
        $post->setDateVoiture($row['dateVoiture']);
        $post->setColor($row['color']);
        $post->setImagePath($row['imagePath']);

        return $post;
    }
}