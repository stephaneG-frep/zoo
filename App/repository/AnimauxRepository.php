<?php

namespace App\Repository;

use App\Entity\Animaux;
use App\Db\Mysql;
use App\Tools\StringTools;

class AnimauxRepository 
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