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
        foreach ($this->getLieuData() as $lieuData) {
            $lieu = new Lieu();
            $lieu->setName($lieuData["name"]);
            foreach ($lieuData["matos"] as $objetData) {
                $objet = new Materiel();
                $objet->setName($objetData["name"]);
                $objet->setLieu($lieu);
                $objet->setEmplacement($objetData["emplacement"]);
                $manager->persist($objet);
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

        foreach ($this->getCategorieData() as $categorieData) {
            $categorie = new Categorie();
            $categorie->setDescription($categorieData['description']);
            $categorie->setPubliée($categorieData['publiée']);
            foreach ($categorieData['materiels'] as $materielId) {
                $materiel = $manager->getRepository(Materiel::class)->find($materielId);
                if ($materiel) {
                    $categorie->addMateriel($materiel);
                } else {
                    throw new \Exception("Materiel with ID $materielId not found");
                }
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
                'publiée' => true,
                'materiels' => [1, 2]

            ],
            [
                'description' => 'Outils de coupe',
                'publiée' => false,
                'materiels' => [2]
            ],
        ];
    }
}


