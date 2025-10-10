<?php

namespace App\DataFixtures;

use App\Entity\Materiel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lieu;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach ($this->getLieuData() as $lieuData) {
            $lieu = new Lieu();
            $lieu->setName($lieuData["name"]);
            foreach ($lieuData["matos"] as $objetData) {
                $objet = new Materiel();
                $objet->setName($objetData["name"]);
                $objet->setLieu($lieu);
                $manager->persist($objet);
            }   
            $manager->persist($lieu);
        }
        $manager->flush();
    }

    private function getLieuData()
    {
        return [
            [
                'name' => 'fablab', 
                'matos'=> [
                    ['name' => 'tournevis', 'emplacement' => 'etagère 2'],
                    ['name' => 'marteau', 'emplacement' =>"étagere 1a"]
                ]
            ],
            [
                'name' => 'reserve u1',
                'matos'=> [
                    ['name' =>'tournevis', 'emplacement' => 'etagère 2'],
                    ['name' =>'marteau', 'emplacement' => 'etagère 2'],
                ]
            ],

    
        ];
        
    }
}


