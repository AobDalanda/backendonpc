<?php

namespace App\Entity;

use App\Repository\VillesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VillesRepository::class)
 */
class Villes
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
    private $Code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $CodePostal;

    /**
     * @ORM\ManyToOne(targetEntity=Departements::class, inversedBy="villes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departements;

    /**
     * @ORM\ManyToOne(targetEntity=AllUsers::class, inversedBy="villes")
     */
    private $allusers;

    /**
     * @ORM\OneToMany(targetEntity=Etablissements::class, mappedBy="villes", orphanRemoval=true)
     */
    private $etablissements;

    public function __construct()
    {
        $this->etablissements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function setCode(string $Code): self
    {
        $this->Code = $Code;

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

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(string $CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getDepartements(): ?Departements
    {
        return $this->departements;
    }

    public function setDepartements(?Departements $departements): self
    {
        $this->departements = $departements;

        return $this;
    }

    public function getAllusers(): ?AllUsers
    {
        return $this->allusers;
    }

    public function setAllusers(?AllUsers $allusers): self
    {
        $this->allusers = $allusers;

        return $this;
    }

    /**
     * @return Collection|Etablissements[]
     */
    public function getEtablissements(): Collection
    {
        return $this->etablissements;
    }

    public function addEtablissement(Etablissements $etablissement): self
    {
        if (!$this->etablissements->contains($etablissement)) {
            $this->etablissements[] = $etablissement;
            $etablissement->setVilles($this);
        }

        return $this;
    }

    public function removeEtablissement(Etablissements $etablissement): self
    {
        if ($this->etablissements->removeElement($etablissement)) {
            // set the owning side to null (unless already changed)
            if ($etablissement->getVilles() === $this) {
                $etablissement->setVilles(null);
            }
        }

        return $this;
    }
}
