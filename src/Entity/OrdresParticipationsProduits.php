<?php

namespace App\Entity;

use App\Repository\OrdresParticipationsProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdresParticipationsProduitsRepository::class)
 */
class OrdresParticipationsProduits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $Montant;

    /**
     * @ORM\Column(type="integer")
     */
    private $Empl;

    /**
     * @ORM\ManyToOne(targetEntity=Produits::class, inversedBy="ordresParticipationsProduits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produits;

    /**
     * @ORM\ManyToOne(targetEntity=OrdresParticipations::class, inversedBy="ordresParticipationsProduits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ordreparticipations;
/*
    /**
     * @ORM\ManyToOne(targetEntity=Etablissements::class, inversedBy="ordresParticipationsProduits")
     * @ORM\JoinColumn(nullable=false)
     */
    //private $etablissements;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?float
    {
        return $this->Montant;
    }

    public function setMontant(float $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getEmpl(): ?int
    {
        return $this->Empl;
    }

    public function setEmpl(int $Empl): self
    {
        $this->Empl = $Empl;

        return $this;
    }

    public function getProduits(): ?Produits
    {
        return $this->produits;
    }

    public function setProduits(?Produits $produits): self
    {
        $this->produits = $produits;

        return $this;
    }

    public function getOrdreparticipations(): ?OrdresParticipations
    {
        return $this->ordreparticipations;
    }

    public function setOrdreparticipations(?OrdresParticipations $ordreparticipations): self
    {
        $this->ordreparticipations = $ordreparticipations;

        return $this;
    }

    public function getEtablissements(): ?Etablissements
    {
        return $this->etablissements;
    }

    public function setEtablissements(?Etablissements $etablissements): self
    {
        $this->etablissements = $etablissements;

        return $this;
    }


}
