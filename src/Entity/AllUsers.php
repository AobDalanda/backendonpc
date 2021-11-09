<?php

namespace App\Entity;

use App\Repository\AllUsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=AllUsersRepository::class)
 * @UniqueEntity(fields={"Mail"}, message="Cet email est déja utilisé!")
 */
class AllUsers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("post:read")
     */
    private $Prenom;

    /**
     * @ORM\Column(type="text")
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=50)
     *
     */
    private $TypeUtilisateur;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     *
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    private $MotDePasse;

    /**
     * @ORM\OneToMany(targetEntity=Villes::class, mappedBy="allusers")
     */
    private $villes;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Status;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CreationDate;





    public function __construct()
    {
        $this->villes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getTypeUtilisateur(): ?string
    {
        return $this->TypeUtilisateur;
    }

    public function setTypeUtilisateur(string $TypeUtilisateur): self
    {
        $this->TypeUtilisateur = $TypeUtilisateur;

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

    public function getMotDePasse(): ?string
    {
        return $this->MotDePasse;
    }

    public function setMotDePasse(string $MotDePasse): self
    {
        $this->MotDePasse = $MotDePasse;

        return $this;
    }

    /**
     * @return Collection|Villes[]
     */
    public function getVilles(): Collection
    {
        return $this->villes;
    }

    public function addVille(Villes $ville): self
    {
        if (!$this->villes->contains($ville)) {
            $this->villes[] = $ville;
            $ville->setAllusers($this);
        }

        return $this;
    }

    public function removeVille(Villes $ville): self
    {
        if ($this->villes->removeElement($ville)) {
            // set the owning side to null (unless already changed)
            if ($ville->getAllusers() === $this) {
                $ville->setAllusers(null);
            }
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    public function setCreationDate(?\DateTimeInterface $CreationDate): self
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }



}
