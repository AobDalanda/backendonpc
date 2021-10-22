<?php

namespace App\Entity;

use App\Repository\OrdresParticipationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdresParticipationsRepository::class)
 */
class OrdresParticipations
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
     * @ORM\Column(type="string", length=25)
     */
    private $Etat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateSouscription;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Montant;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Descriptif;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $RemiseDirection;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $RemiseDelegue;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Facturable;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $Facturation;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_debut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_fin;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Commentaire;

    /**
     * @ORM\OneToMany(targetEntity=OrdresParticipationsProduits::class, mappedBy="ordreparticipations", orphanRemoval=true)
     */
    private $ordresParticipationsProduits;

    /**
     * @ORM\ManyToOne(targetEntity=Clients::class, inversedBy="ordresparticipations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clients;

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

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getDateSouscription(): ?\DateTimeInterface
    {
        return $this->DateSouscription;
    }

    public function setDateSouscription(?\DateTimeInterface $DateSouscription): self
    {
        $this->DateSouscription = $DateSouscription;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->Montant;
    }

    public function setMontant(?float $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->Descriptif;
    }

    public function setDescriptif(?string $Descriptif): self
    {
        $this->Descriptif = $Descriptif;

        return $this;
    }

    public function getRemiseDirection(): ?float
    {
        return $this->RemiseDirection;
    }

    public function setRemiseDirection(?float $RemiseDirection): self
    {
        $this->RemiseDirection = $RemiseDirection;

        return $this;
    }

    public function getRemiseDelegue(): ?float
    {
        return $this->RemiseDelegue;
    }

    public function setRemiseDelegue(?float $RemiseDelegue): self
    {
        $this->RemiseDelegue = $RemiseDelegue;

        return $this;
    }

    public function getFacturable(): ?float
    {
        return $this->Facturable;
    }

    public function setFacturable(?float $Facturable): self
    {
        $this->Facturable = $Facturable;

        return $this;
    }

    public function getFacturation(): ?string
    {
        return $this->Facturation;
    }

    public function setFacturation(?string $Facturation): self
    {
        $this->Facturation = $Facturation;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->Date_debut;
    }

    public function setDateDebut(\DateTimeInterface $Date_debut): self
    {
        $this->Date_debut = $Date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->Date_fin;
    }

    public function setDateFin(?\DateTimeInterface $Date_fin): self
    {
        $this->Date_fin = $Date_fin;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

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
            $ordresParticipationsProduit->setOrdreparticipations($this);
        }

        return $this;
    }

    public function removeOrdresParticipationsProduit(OrdresParticipationsProduits $ordresParticipationsProduit): self
    {
        if ($this->ordresParticipationsProduits->removeElement($ordresParticipationsProduit)) {
            // set the owning side to null (unless already changed)
            if ($ordresParticipationsProduit->getOrdreparticipations() === $this) {
                $ordresParticipationsProduit->setOrdreparticipations(null);
            }
        }

        return $this;
    }

    public function getClients(): ?Clients
    {
        return $this->clients;
    }

    public function setClients(?Clients $clients): self
    {
        $this->clients = $clients;

        return $this;
    }
}
