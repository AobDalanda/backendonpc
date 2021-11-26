<?php

namespace App\Entity;

use App\Repository\INsertionWebRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=INsertionWebRepository::class)
 */
class InsertionWeb
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $logoliste;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $logofiche;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $diaporama;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $motscles;

    /**
     * @ORM\ManyToOne(targetEntity=Etablissements::class, inversedBy="insertionWebs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etablissement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(?string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getLogoliste(): ?string
    {
        return $this->logoliste;
    }

    public function setLogoliste(?string $logoliste): self
    {
        $this->logoliste = $logoliste;

        return $this;
    }

    public function getLogofiche(): ?string
    {
        return $this->logofiche;
    }

    public function setLogofiche(?string $logofiche): self
    {
        $this->logofiche = $logofiche;

        return $this;
    }

    public function getDiaporama(): ?string
    {
        return $this->diaporama;
    }

    public function setDiaporama(?string $diaporama): self
    {
        $this->diaporama = $diaporama;

        return $this;
    }

    public function getMotscles(): ?string
    {
        return $this->motscles;
    }

    public function setMotscles(?string $motscles): self
    {
        $this->motscles = $motscles;

        return $this;
    }

    public function getEtablissement(): ?Etablissements
    {
        return $this->etablissement;
    }

    public function setEtablissement(?Etablissements $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }
}
