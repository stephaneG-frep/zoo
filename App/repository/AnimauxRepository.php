<?php

namespace App\Repository;

use App\Entity\Animaux;
use App\Db\Mysql;
use App\Entity\Entity;
use App\Tools\StringTools;

class AnimauxRepository extends Entity
{
    public function findOneById(int $id)
    {
        //Appel BDD un animal

        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare("SELECT * FROM animaux WHERE id = :id");
        $query->bindParam(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        $animal = $query->fetch($pdo::FETCH_ASSOC);

        $animauxEntity = new Animaux();

        foreach ($animal as $key => $value) {
            $animauxEntity->{'set'.StringTools::toPascalCase($key)  }($value);
        }

        return $animauxEntity;
    }

    public function getTotalAnimaux(array $animaux)
    {
        //(int $category_id, int $employers_id, int $image_id, string $race, string $name, string $age, string $description, string $image)
    


        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare("SELECT * FROM animaux ORDER BY id DESC");
        
        $query->execute();
        $query->fetchAll();
        

        $animauxEntity = new Animaux();

        foreach ($animaux as $key => $value) {
            $animauxEntity->{'set'.StringTools::toPascalCase($key)  }($value);
        }

    
        
        return $animauxEntity;

    
    }

    public function findAll(): array
    {

        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();


        $query = $this->$pdo->prepare("SELECT * FROM animaux");
        $query->execute();
        $animaux = $query->fetchAll($this->$pdo::FETCH_ASSOC);

        $animauxArray = [];

        if ($animaux) {
            foreach ($animaux as $animal) {
                $animauxArray[] = Animaux::createAndHydrate($animal);
            }
        }
        return $animauxArray;
    }
}