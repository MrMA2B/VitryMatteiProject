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



    public function create(array $data = [])
    {
        $this->createQuery(
            'INSERT INTO post (title, content, createdAt, authorId) VALUES (:title, :content, :createdAt, :authorId)',
            [
                'title' => $data['title'],
                'content' => $data['content'],
                'createdAt' => (new \DateTime())->format('Y-m-d H:i:s'),
                'authorId' => 1,
            ]
        );
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