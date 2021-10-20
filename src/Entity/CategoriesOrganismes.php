<?php

namespace App\Entity;

use App\Repository\CategoriesOrganismesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesOrganismesRepository::class)
 */
class CategoriesOrganismes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Identifiant;

    /**
     * @ORM\Column(type="text")
     */
    private $Libelle;

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
}