<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientsRepository::class)
 */
class Clients
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
    private $Nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $Civilite;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Rue;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $Code_Postal;

    /**
     * @ORM\OneToMany(targetEntity=OrdresParticipations::class, mappedBy="clients", orphanRemoval=true)
     */
    private $ordresparticipations;

    /**
     * @ORM\OneToMany(targetEntity=Etablissements::class, mappedBy="clients", orphanRemoval=true)
     */
    private $etablissements;

    public function __construct()
    {
        $this->ordresparticipations = new ArrayCollection();
        $this->etablissements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->Civilite;
    }

    public function setCivilite(?string $Civilite): self
    {
        $this->Civilite = $Civilite;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->Rue;
    }

    public function setRue(string $Rue): self
    {
        $this->Rue = $Rue;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->Code_Postal;
    }

    public function setCodePostal(int $Code_Postal): self
    {
        $this->Code_Postal = $Code_Postal;

        return $this;
    }

    /**
     * @return Collection|OrdresParticipations[]
     */
    public function getOrdresparticipations(): Collection
    {
        return $this->ordresparticipations;
    }

    public function addOrdresparticipation(OrdresParticipations $ordresparticipation): self
    {
        if (!$this->ordresparticipations->contains($ordresparticipation)) {
            $this->ordresparticipations[] = $ordresparticipation;
            $ordresparticipation->setClients($this);
        }

        return $this;
    }

    public function removeOrdresparticipation(OrdresParticipations $ordresparticipation): self
    {
        if ($this->ordresparticipations->removeElement($ordresparticipation)) {
            // set the owning side to null (unless already changed)
            if ($ordresparticipation->getClients() === $this) {
                $ordresparticipation->setClients(null);
            }
        }

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
            $etablissement->setClients($this);
        }

        return $this;
    }

    public function removeEtablissement(Etablissements $etablissement): self
    {
        if ($this->etablissements->removeElement($etablissement)) {
            // set the owning side to null (unless already changed)
            if ($etablissement->getClients() === $this) {
                $etablissement->setClients(null);
            }
        }

        return $this;
    }
}
