<?php

namespace App\Entity;

use App\Repository\SourcesMisesAJourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SourcesMisesAJourRepository::class)
 */
class SourcesMisesAJour
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $Libelle;

    /**
     * @ORM\OneToMany(targetEntity=Etablissements::class, mappedBy="sourcesMisesAJour", orphanRemoval=true)
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

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

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
            $etablissement->setSourcesMisesAJour($this);
        }

        return $this;
    }

    public function removeEtablissement(Etablissements $etablissement): self
    {
        if ($this->etablissements->removeElement($etablissement)) {
            // set the owning side to null (unless already changed)
            if ($etablissement->getSourcesMisesAJour() === $this) {
                $etablissement->setSourcesMisesAJour(null);
            }
        }

        return $this;
    }
}
