<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Materiel;
use App\Entity\Member;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $published = null;

    /**
     * @var Collection<int, Member>
     */
    #[ORM\ManyToOne(inversedBy: 'categories')]
    private ?Member $member = null;

    /**
     * @var Collection<int, Materiel>
     */
    #[ORM\ManyToMany(targetEntity: Materiel::class, inversedBy: 'categories')]
    private Collection $materiels;

    public function __construct()
    {
        $this->materiels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): static
    {
        $this->published = $published;

        return $this;
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    // public function addMember(Member $member): static
    // {
    //     if (!$this->member->contains($member)) {
    //         $this->member->add($member);
    //         $member->setCategorie($this);
    //     }

    //     return $this;
    // }

    public function setMember(?Member $member): static
    {
        $this->member = $member;
        return $this;
    }

    // public function removeMember(Member $member): static
    // {
    //     if ($this->member->removeElement($member)) {
    //         // set the owning side to null (unless already changed)
    //         if ($member->getCategorie() === $this) {
    //             $member->setCategorie(null);
    //         }
    //     }

    //     return $this;
    // }

    /**
     * @return Collection<int, Materiel>
     */
    public function getMateriels(): Collection
    {
        return $this->materiels;
    }

    public function addMateriel(Materiel $materiel): static
    {
        if (!$this->materiels->contains($materiel)) {
            $this->materiels->add($materiel);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): static
    {
        $this->materiels->removeElement($materiel);

        return $this;
    }
}
