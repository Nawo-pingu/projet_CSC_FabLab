<?php

namespace App\DataFixtures;

use App\Entity\Materiel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lieu;
use App\Entity\Member;
use App\Entity\Categorie;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        foreach ($this->getLieuData() as $i => $lieuData) {
            $lieu = new Lieu();
            $lieu->setName($lieuData["name"]);
            foreach ($lieuData["matos"] as $j => $objetData) {
                $objet = new Materiel();
                $objet->setName($objetData["name"]);
                $objet->setLieu($lieu);
                $objet->setEmplacement($objetData["emplacement"]);
                $manager->persist($objet);

                $this->addReference("materiel_$i$j", $objet);
            }
            $manager->persist($lieu);
        }
        foreach ($this->getMemberData() as $memberData) {
            $user = new Member();
            $user->setNom($memberData['name']);
            $password = $this->hasher->hashPassword($user, $memberData['mdp']);
            $user->setEmail($memberData['email']);
            $user->setPassword($password);

            // $roles = array();
            // $roles[] = $role;
            // $user->setRoles($roles);

            $manager->persist($user);
        }
        $manager->flush();

        foreach ($this->getCategorieData() as $categorieData) {
            $categorie = new Categorie();
            $categorie->setDescription($categorieData['description']);
            $categorie->setPublished($categorieData['published']);
            foreach ($categorieData['materiels'] as $ref) {
                $materiel = $this->getReference($ref, Materiel::class);
                $categorie->addMateriel($materiel);
            }
            $manager->persist($categorie);
        }

        $manager->flush();
    }

    private function getMemberData()
    {
        return [
            [
                'name' => 'olivier',
                'email' => 'olivier@localhost',
                'mdp' => '123456'
            ],
            [
                'name' => 'slash',
                'email' => 'slash@localhost',
                'mdp' => '123456'
            ]
        ];
    }
    private function getLieuData()
    {
        return [
            [
                'name' => 'fablab',
                'matos' => [
                    ['name' => 'tournevis jaune', 'emplacement' => 'etagère 2'],
                    ['name' => 'marteau bleu', 'emplacement' => "étagere 1a"]
                ]
            ],
            [
                'name' => 'reserve u1',
                'matos' => [
                    ['name' => 'tournevis rouge', 'emplacement' => 'etagère 2'],
                    ['name' => 'marteau vert', 'emplacement' => 'etagère 2'],
                ]
            ],
        ];
    }

    private function getCategorieData()
    {
        return [
            [
                'description' => 'Outils de mesure',
                'published' => true,
                'materiels' => ['materiel_00', 'materiel_10']

            ],
            [
                'description' => 'Outils de coupe',
                'published' => false,
                'materiels' => ['materiel_01', 'materiel_11']
            ],
        ];
    }
}


