<?php

namespace App\Entity;

use App\Repository\RegionsInternatGuideRepository;
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
}
