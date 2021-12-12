<?php

namespace App\AdminRepository;

use App\Database;
use App\model\Admin;

class AdminRepository extends Database
{
    public function getId()
    {
         
        $query=$this->createQuery('SELECT * FROM admin');
        $values=$query->fetchAll(\PDO::FETCH_ASSOC);
       
      
        $Id= array();
        for ($i=0;$i<sizeof($values);$i++){
            $Id[$i]=$this->buildObject($values[$i]);
        }
        return $Id;
    
    }

    /*
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

    */
    
    private function buildObject(array $row): Admin
    {
        $post = new Admin;
        $post->setNom($row['Nom']);
        $post->setPrenom($row['Prenom']);
        $post->setId($row['Id']);
        $post->setMdp($row['mdp']);
 
        return $post;
    }
}