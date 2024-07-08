<?php

namespace App\Repository;

use App\Entity\Animaux;
use App\Db\Mysql;

class AnimauxRepository
{
    public function findOneById(int $id)
    {
        //Appel BDD un animal

        $mysql = Mysql::getInstance();
        
        $pdo = $mysql->getPDO();

        $animal = ['id' => 1, 'race' => 'Lion', 'name' => 'Léon', 'age' => '33', 'description' => 'description test'];

        $animauxEntity = new Animaux();
        $animauxEntity->setId($animal['id']);
        $animauxEntity->setRace($animal['race']);
        $animauxEntity->setName($animal['name']);
        $animauxEntity->setAge($animal['age']);
        $animauxEntity->setDescription($animal['description']);

        return $animauxEntity;
    }
}