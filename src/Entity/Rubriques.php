<?php

namespace App\Entity;

use App\Repository\RubriquesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RubriquesRepository::class)
 */
class Rubriques
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Identifiant;

    /**
     * @ORM\Column(type="text")
     */
    private $Libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $Tri;

    /**
     * @ORM\Column(type="integer")
     */
    private $Niveau;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Pere;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Classement;

    /**
     * @ORM\Column(type="text")
     */
    private $LibelleMEP;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Items_Identifiant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ParutionMEP;

    /**
     * @ORM\OneToMany(targetEntity=Etablissements::class, mappedBy="rubriques", orphanRemoval=true)
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

    public function getTri(): ?float
    {
        return $this->Tri;
    }

    public function setTri(float $Tri): self
    {
        $this->Tri = $Tri;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->Niveau;
    }

    public function setNiveau(int $Niveau): self
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    public function getPere(): ?string
    {
        return $this->Pere;
    }

    public function setPere(?string $Pere): self
    {
        $this->Pere = $Pere;

        return $this;
    }

    public function getClassement(): ?string
    {
        return $this->Classement;
    }

    public function setClassement(string $Classement): self
    {
        $this->Classement = $Classement;

        return $this;
    }

    public function getLibelleMEP(): ?string
    {
        return $this->LibelleMEP;
    }

    public function setLibelleMEP(string $LibelleMEP): self
    {
        $this->LibelleMEP = $LibelleMEP;

        return $this;
    }

    public function getItemsIdentifiant(): ?string
    {
        return $this->Items_Identifiant;
    }

    public function setItemsIdentifiant(string $Items_Identifiant): self
    {
        $this->Items_Identifiant = $Items_Identifiant;

        return $this;
    }

    public function getParutionMEP(): ?bool
    {
        return $this->ParutionMEP;
    }

    public function setParutionMEP(bool $ParutionMEP): self
    {
        $this->ParutionMEP = $ParutionMEP;

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
            $etablissement->setRubriques($this);
        }

        return $this;
    }

    public function removeEtablissement(Etablissements $etablissement): self
    {
        if ($this->etablissements->removeElement($etablissement)) {
            // set the owning side to null (unless already changed)
            if ($etablissement->getRubriques() === $this) {
                $etablissement->setRubriques(null);
            }
        }

        return $this;
    }
}
