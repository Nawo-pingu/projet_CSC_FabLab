Coucou,
Voici mon README.
Owan MANNONE

Le but de ce projet est de faire un inventaire du fablab.

L'[inventaire] seront les lieux ou sont entreposés les objets. (Lieu)  
Les [objets] seront les outils et les consommables. (Matériel)  
Les [galeries] seront les différentes catégories de matériel. (Catégorie)

Pour executer mon projet, veuillez rentrer ces commandes :

```php
rm var/data_dev.db //si necessaire
symfony console doctrine:database:create
symfony console doctrine:schema:create
symfony console doctrine:schema:update
symfony console doctrine:fixtures:load

symfony server:start
```

Pour faire des tests sur la database avec sql :

```
symfony console dbal:run-sql "SELECT name FROM sqlite_master WHERE type='table';"
symfony console dbal:run "select * from materiel"
```

# relations de Materiel :

```
    categories : ManyToMany (connecté à Categories)

    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'materiels')] #[ORM\JoinColumn(nullable: false)]
    private ?Lieu $lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Categorie::class, mappedBy: 'materiels')]
    private Collection $categories;

    #[ORM\Column(length: 255)]
    private ?string $emplacement = null;
```

# relations de Categorie :

```
createur : OneToMany (connecté à membre)

materiels : ManyToMany (connecté à Materiel)
```

# propriétés de Lieu :

```
private ?int $id = null;

    #[ORM\OneToMany(targetEntity: Materiel::class, mappedBy: 'lieu', orphanRemoval: true)]
    private Collection $materiels;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToOne(mappedBy: 'inventaires', cascade: ['persist', 'remove'])]
    private ?Member $member = null;
```

# propriété de Member :

```
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\OneToOne(inversedBy: 'member', cascade: ['persist', 'remove'])]
    private ?Lieu $inventaires = null;

    #[ORM\ManyToOne(inversedBy: 'createur')]
    private ?Categorie $categorie = null;
```
