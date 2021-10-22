<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
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
    private $Designation;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Categorie;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $CodeComptabilite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Actif;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Actualite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Projet;

    /**
     * @ORM\Column(type="boolean")
     */
    private $BIM;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $CategorieBIM;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ProduitSurface;

    /**
     * @ORM\Column(type="float")
     */
    private $Tri;

    /**
     * @ORM\Column(type="integer")
     */
    private $Formats_publicites_Identifiant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Variable;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Multiple;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Transformation_N;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Eclatement_A;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Eclatement_B;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Produit_Pere;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Gescom;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $OP_Site;

    /**
     * @ORM\Column(type="boolean")
     */
    private $PrintApplicable;

    /**
     * @ORM\Column(type="float")
     */
    private $PrixOptionPrint;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $DestinationProduit;

    /**
     * @ORM\Column(type="float")
     */
    private $PrixDelta;

    /**
     * @ORM\OneToMany(targetEntity=OrdresParticipationsProduits::class, mappedBy="produits", orphanRemoval=true)
     */
    private $ordresParticipationsProduits;

    public function __construct()
    {
        $this->ordresParticipationsProduits = new ArrayCollection();
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

    public function getDesignation(): ?string
    {
        return $this->Designation;
    }

    public function setDesignation(string $Designation): self
    {
        $this->Designation = $Designation;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getCodeComptabilite(): ?string
    {
        return $this->CodeComptabilite;
    }

    public function setCodeComptabilite(string $CodeComptabilite): self
    {
        $this->CodeComptabilite = $CodeComptabilite;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->Actif;
    }

    public function setActif(bool $Actif): self
    {
        $this->Actif = $Actif;

        return $this;
    }

    public function getActualite(): ?bool
    {
        return $this->Actualite;
    }

    public function setActualite(bool $Actualite): self
    {
        $this->Actualite = $Actualite;

        return $this;
    }

    public function getProjet(): ?bool
    {
        return $this->Projet;
    }

    public function setProjet(bool $Projet): self
    {
        $this->Projet = $Projet;

        return $this;
    }

    public function getBIM(): ?bool
    {
        return $this->BIM;
    }

    public function setBIM(bool $BIM): self
    {
        $this->BIM = $BIM;

        return $this;
    }

    public function getCategorieBIM(): ?string
    {
        return $this->CategorieBIM;
    }

    public function setCategorieBIM(?string $CategorieBIM): self
    {
        $this->CategorieBIM = $CategorieBIM;

        return $this;
    }

    public function getProduitSurface(): ?bool
    {
        return $this->ProduitSurface;
    }

    public function setProduitSurface(bool $ProduitSurface): self
    {
        $this->ProduitSurface = $ProduitSurface;

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

    public function getFormatsPublicitesIdentifiant(): ?int
    {
        return $this->Formats_publicites_Identifiant;
    }

    public function setFormatsPublicitesIdentifiant(int $Formats_publicites_Identifiant): self
    {
        $this->Formats_publicites_Identifiant = $Formats_publicites_Identifiant;

        return $this;
    }

    public function getVariable(): ?bool
    {
        return $this->Variable;
    }

    public function setVariable(bool $Variable): self
    {
        $this->Variable = $Variable;

        return $this;
    }

    public function getMultiple(): ?bool
    {
        return $this->Multiple;
    }

    public function setMultiple(bool $Multiple): self
    {
        $this->Multiple = $Multiple;

        return $this;
    }

    public function getTransformationN(): ?string
    {
        return $this->Transformation_N;
    }

    public function setTransformationN(string $Transformation_N): self
    {
        $this->Transformation_N = $Transformation_N;

        return $this;
    }

    public function getEclatementA(): ?string
    {
        return $this->Eclatement_A;
    }

    public function setEclatementA(string $Eclatement_A): self
    {
        $this->Eclatement_A = $Eclatement_A;

        return $this;
    }

    public function getEclatementB(): ?string
    {
        return $this->Eclatement_B;
    }

    public function setEclatementB(string $Eclatement_B): self
    {
        $this->Eclatement_B = $Eclatement_B;

        return $this;
    }

    public function getProduitPere(): ?string
    {
        return $this->Produit_Pere;
    }

    public function setProduitPere(string $Produit_Pere): self
    {
        $this->Produit_Pere = $Produit_Pere;

        return $this;
    }

    public function getGescom(): ?bool
    {
        return $this->Gescom;
    }

    public function setGescom(bool $Gescom): self
    {
        $this->Gescom = $Gescom;

        return $this;
    }

    public function getOPSite(): ?string
    {
        return $this->OP_Site;
    }

    public function setOPSite(string $OP_Site): self
    {
        $this->OP_Site = $OP_Site;

        return $this;
    }

    public function getPrintApplicable(): ?bool
    {
        return $this->PrintApplicable;
    }

    public function setPrintApplicable(bool $PrintApplicable): self
    {
        $this->PrintApplicable = $PrintApplicable;

        return $this;
    }

    public function getPrixOptionPrint(): ?float
    {
        return $this->PrixOptionPrint;
    }

    public function setPrixOptionPrint(float $PrixOptionPrint): self
    {
        $this->PrixOptionPrint = $PrixOptionPrint;

        return $this;
    }

    public function getDestinationProduit(): ?string
    {
        return $this->DestinationProduit;
    }

    public function setDestinationProduit(string $DestinationProduit): self
    {
        $this->DestinationProduit = $DestinationProduit;

        return $this;
    }

    public function getPrixDelta(): ?float
    {
        return $this->PrixDelta;
    }

    public function setPrixDelta(float $PrixDelta): self
    {
        $this->PrixDelta = $PrixDelta;

        return $this;
    }

    /**
     * @return Collection|OrdresParticipationsProduits[]
     */
    public function getOrdresParticipationsProduits(): Collection
    {
        return $this->ordresParticipationsProduits;
    }

    public function addOrdresParticipationsProduit(OrdresParticipationsProduits $ordresParticipationsProduit): self
    {
        if (!$this->ordresParticipationsProduits->contains($ordresParticipationsProduit)) {
            $this->ordresParticipationsProduits[] = $ordresParticipationsProduit;
            $ordresParticipationsProduit->setProduits($this);
        }

        return $this;
    }

    public function removeOrdresParticipationsProduit(OrdresParticipationsProduits $ordresParticipationsProduit): self
    {
        if ($this->ordresParticipationsProduits->removeElement($ordresParticipationsProduit)) {
            // set the owning side to null (unless already changed)
            if ($ordresParticipationsProduit->getProduits() === $this) {
                $ordresParticipationsProduit->setProduits(null);
            }
        }

        return $this;
    }
}
