<?php

namespace App\Entity;

use App\Repository\DiocesesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DiocesesRepository::class)
 */
class Dioceses
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelle;

    /**
     * @ORM\OneToMany(targetEntity=Etablissements::class, mappedBy="dioceses", orphanRemoval=true)
     */
    private $etablissments;

    public function __construct()
    {
        $this->etablissments = new ArrayCollection();
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
    public function getEtablissments(): Collection
    {
        return $this->etablissments;
    }

    public function addEtablissment(Etablissements $etablissment): self
    {
        if (!$this->etablissments->contains($etablissment)) {
            $this->etablissments[] = $etablissment;
            $etablissment->setDioceses($this);
        }

        return $this;
    }

    public function removeEtablissment(Etablissements $etablissment): self
    {
        if ($this->etablissments->removeElement($etablissment)) {
            // set the owning side to null (unless already changed)
            if ($etablissment->getDioceses() === $this) {
                $etablissment->setDioceses(null);
            }
        }

        return $this;
    }
}
