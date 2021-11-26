<?php

namespace App\Entity;

use App\Repository\BanniereRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BanniereRepository::class)
 */
class Banniere
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
    private $orientation;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $presence;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $detail;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $rubrique;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $numeroOp;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebutMiseEnLigne;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFinMiseEnLigne;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $regions_Identifiant;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $departements_Numero;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateOp;

    /**
     * @ORM\Column(type="text")
     */
    private $nom_banniere;

    /**
     * @ORM\Column(type="integer")
     */
    private $rubrique_banniere;

    /**
     * @ORM\Column(type="integer")
     */
    private $type_banniere;

    /**
     * @ORM\Column(type="text")
     */
    private $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(string $orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function getPresence(): ?string
    {
        return $this->presence;
    }

    public function setPresence(string $presence): self
    {
        $this->presence = $presence;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getRubrique(): ?string
    {
        return $this->rubrique;
    }

    public function setRubrique(?string $rubrique): self
    {
        $this->rubrique = $rubrique;

        return $this;
    }

    public function getNumeroOp(): ?string
    {
        return $this->numeroOp;
    }

    public function setNumeroOp(?string $numeroOp): self
    {
        $this->numeroOp = $numeroOp;

        return $this;
    }

    public function getDateDebutMiseEnLigne(): ?\DateTimeInterface
    {
        return $this->dateDebutMiseEnLigne;
    }

    public function setDateDebutMiseEnLigne(?\DateTimeInterface $dateDebutMiseEnLigne): self
    {
        $this->dateDebutMiseEnLigne = $dateDebutMiseEnLigne;

        return $this;
    }

    public function getDateFinMiseEnLigne(): ?\DateTimeInterface
    {
        return $this->dateFinMiseEnLigne;
    }

    public function setDateFinMiseEnLigne(?\DateTimeInterface $dateFinMiseEnLigne): self
    {
        $this->dateFinMiseEnLigne = $dateFinMiseEnLigne;

        return $this;
    }

    public function getRegionsIdentifiant(): ?string
    {
        return $this->regions_Identifiant;
    }

    public function setRegionsIdentifiant(string $regions_Identifiant): self
    {
        $this->regions_Identifiant = $regions_Identifiant;

        return $this;
    }

    public function getDepartementsNumero(): ?string
    {
        return $this->departements_Numero;
    }

    public function setDepartementsNumero(?string $departements_Numero): self
    {
        $this->departements_Numero = $departements_Numero;

        return $this;
    }

    public function getDateOp(): ?\DateTimeInterface
    {
        return $this->dateOp;
    }

    public function setDateOp(?\DateTimeInterface $dateOp): self
    {
        $this->dateOp = $dateOp;

        return $this;
    }

    public function getNomBanniere(): ?string
    {
        return $this->nom_banniere;
    }

    public function setNomBanniere(string $nom_banniere): self
    {
        $this->nom_banniere = $nom_banniere;

        return $this;
    }

    public function getRubriqueBanniere(): ?int
    {
        return $this->rubrique_banniere;
    }

    public function setRubriqueBanniere(int $rubrique_banniere): self
    {
        $this->rubrique_banniere = $rubrique_banniere;

        return $this;
    }

    public function getTypeBanniere(): ?int
    {
        return $this->type_banniere;
    }

    public function setTypeBanniere(int $type_banniere): self
    {
        $this->type_banniere = $type_banniere;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
