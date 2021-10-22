<?php

namespace App\Entity;

use App\Repository\RegionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegionsRepository::class)
 */
class Regions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $Identifiant;

    /**
     * @ORM\Column(type="text")
     */
    private $Libelle;

    /**
     * @ORM\ManyToOne(targetEntity=RegionsInternatGuide::class, inversedBy="regions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $regioninternatguide;

    /**
     * @ORM\OneToMany(targetEntity=Departements::class, mappedBy="regions", orphanRemoval=true)
     */
    private $departements;

    public function __construct()
    {
        $this->departements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->Identifiant;
    }

    public function setIdentifiant(string $Identifiant): self
    {
        $this->Identifiant = $Identifiant;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getRegioninternatguide(): ?RegionsInternatGuide
    {
        return $this->regioninternatguide;
    }

    public function setRegioninternatguide(?RegionsInternatGuide $regioninternatguide): self
    {
        $this->regioninternatguide = $regioninternatguide;

        return $this;
    }

    /**
     * @return Collection|Departements[]
     */
    public function getDepartements(): Collection
    {
        return $this->departements;
    }

    public function addDepartement(Departements $departement): self
    {
        if (!$this->departements->contains($departement)) {
            $this->departements[] = $departement;
            $departement->setRegions($this);
        }

        return $this;
    }

    public function removeDepartement(Departements $departement): self
    {
        if ($this->departements->removeElement($departement)) {
            // set the owning side to null (unless already changed)
            if ($departement->getRegions() === $this) {
                $departement->setRegions(null);
            }
        }

        return $this;
    }
}
