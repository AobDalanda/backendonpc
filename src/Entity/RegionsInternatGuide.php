<?php

namespace App\Entity;

use App\Repository\RegionsInternatGuideRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegionsInternatGuideRepository::class)
 */
class RegionsInternatGuide
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $Identifiant;

    /**
     * @ORM\Column(type="text")
     */
    private $Libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $Tri;

    /**
     * @ORM\OneToMany(targetEntity=Regions::class, mappedBy="regioninternatguide", orphanRemoval=true)
     */
    private $regions;

    public function __construct()
    {
        $this->regions = new ArrayCollection();
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

    public function getTri(): ?int
    {
        return $this->Tri;
    }

    public function setTri(int $Tri): self
    {
        $this->Tri = $Tri;

        return $this;
    }

    /**
     * @return Collection|Regions[]
     */
    public function getRegions(): Collection
    {
        return $this->regions;
    }

    public function addRegion(Regions $region): self
    {
        if (!$this->regions->contains($region)) {
            $this->regions[] = $region;
            $region->setRegioninternatguide($this);
        }

        return $this;
    }

    public function removeRegion(Regions $region): self
    {
        if ($this->regions->removeElement($region)) {
            // set the owning side to null (unless already changed)
            if ($region->getRegioninternatguide() === $this) {
                $region->setRegioninternatguide(null);
            }
        }

        return $this;
    }
}
