<?php

namespace App\Entity;

use App\Repository\SitesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SitesRepository::class)
 */
class Sites
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $EtatWeb;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $TypeSite;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Url;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateModifUrl;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateFirstOnline;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $NumeroOP;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateTransmissionCompta;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateFinMiseEnLigne;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Commentaires;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Oxatis;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Wordpress;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $HebergementMensuel;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Responsive;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Actualites;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $OffresEmplois;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $PlacesDispo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtatWeb(): ?string
    {
        return $this->EtatWeb;
    }

    public function setEtatWeb(string $EtatWeb): self
    {
        $this->EtatWeb = $EtatWeb;

        return $this;
    }

    public function getTypeSite(): ?string
    {
        return $this->TypeSite;
    }

    public function setTypeSite(?string $TypeSite): self
    {
        $this->TypeSite = $TypeSite;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function setUrl(?string $Url): self
    {
        $this->Url = $Url;

        return $this;
    }

    public function getDateModifUrl(): ?\DateTimeInterface
    {
        return $this->DateModifUrl;
    }

    public function setDateModifUrl(?\DateTimeInterface $DateModifUrl): self
    {
        $this->DateModifUrl = $DateModifUrl;

        return $this;
    }

    public function getDateFirstOnline(): ?\DateTimeInterface
    {
        return $this->DateFirstOnline;
    }

    public function setDateFirstOnline(?\DateTimeInterface $DateFirstOnline): self
    {
        $this->DateFirstOnline = $DateFirstOnline;

        return $this;
    }

    public function getNumeroOP(): ?string
    {
        return $this->NumeroOP;
    }

    public function setNumeroOP(?string $NumeroOP): self
    {
        $this->NumeroOP = $NumeroOP;

        return $this;
    }

    public function getDateTransmissionCompta(): ?\DateTimeInterface
    {
        return $this->DateTransmissionCompta;
    }

    public function setDateTransmissionCompta(?\DateTimeInterface $DateTransmissionCompta): self
    {
        $this->DateTransmissionCompta = $DateTransmissionCompta;

        return $this;
    }

    public function getDateFinMiseEnLigne(): ?\DateTimeInterface
    {
        return $this->DateFinMiseEnLigne;
    }

    public function setDateFinMiseEnLigne(?\DateTimeInterface $DateFinMiseEnLigne): self
    {
        $this->DateFinMiseEnLigne = $DateFinMiseEnLigne;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->Commentaires;
    }

    public function setCommentaires(?string $Commentaires): self
    {
        $this->Commentaires = $Commentaires;

        return $this;
    }

    public function getOxatis(): ?string
    {
        return $this->Oxatis;
    }

    public function setOxatis(string $Oxatis): self
    {
        $this->Oxatis = $Oxatis;

        return $this;
    }

    public function getWordpress(): ?string
    {
        return $this->Wordpress;
    }

    public function setWordpress(string $Wordpress): self
    {
        $this->Wordpress = $Wordpress;

        return $this;
    }

    public function getHebergementMensuel(): ?string
    {
        return $this->HebergementMensuel;
    }

    public function setHebergementMensuel(string $HebergementMensuel): self
    {
        $this->HebergementMensuel = $HebergementMensuel;

        return $this;
    }

    public function getResponsive(): ?string
    {
        return $this->Responsive;
    }

    public function setResponsive(string $Responsive): self
    {
        $this->Responsive = $Responsive;

        return $this;
    }

    public function getActualites(): ?string
    {
        return $this->Actualites;
    }

    public function setActualites(string $Actualites): self
    {
        $this->Actualites = $Actualites;

        return $this;
    }

    public function getOffresEmplois(): ?string
    {
        return $this->OffresEmplois;
    }

    public function setOffresEmplois(string $OffresEmplois): self
    {
        $this->OffresEmplois = $OffresEmplois;

        return $this;
    }

    public function getPlacesDispo(): ?string
    {
        return $this->PlacesDispo;
    }

    public function setPlacesDispo(string $PlacesDispo): self
    {
        $this->PlacesDispo = $PlacesDispo;

        return $this;
    }
}
