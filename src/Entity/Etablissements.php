<?php

namespace App\Entity;

use App\Repository\EtablissementsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtablissementsRepository::class)
 */
class Etablissements
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $Sigle;

    /**
     * @ORM\Column(type="text")
     */
    private $Denomination;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ExtensionDenomination;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $DenominationAbregee;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Adresse1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Adresse2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Adresse3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $CodePostal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Cedex;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Pays;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Fax;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Mail;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Web;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $TypeEtablissement;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $TypeEnseignementPrive;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $SousContrat;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $Formation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NombreEleves;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $Faxing;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Mailing;

    /**
     * @ORM\Column(type="date")
     */
    private $DateMiseAJour;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateExport;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $NumeroAdministratif;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $CodeBac;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $AdressePostale1;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $AdressePostale2;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $AdressePostale3;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $AdressePostale4;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $AdressePostale5;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $AdressePostale6;

    /**
     * @ORM\Column(type="string", length=38, nullable=true)
     */
    private $AdressePostale7;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ExportWeb;

    /**
     * @ORM\Column(type="boolean")
     */
    private $PresenceWeb;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HorsSecteur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $DemandeMaquette;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Facebook;

    /**
     * @ORM\Column(type="integer")
     */
    private $lastIDUser;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $lastProfilUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $PresencePapier;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateAcces;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateExportWeb;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $MailExtranet;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateRetour;

    /**
     * @ORM\Column(type="text")
     */
    private $MailEdito1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

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

    public function getSigle(): ?string
    {
        return $this->Sigle;
    }

    public function setSigle(?string $Sigle): self
    {
        $this->Sigle = $Sigle;

        return $this;
    }

    public function getDenomination(): ?string
    {
        return $this->Denomination;
    }

    public function setDenomination(string $Denomination): self
    {
        $this->Denomination = $Denomination;

        return $this;
    }

    public function getExtensionDenomination(): ?string
    {
        return $this->ExtensionDenomination;
    }

    public function setExtensionDenomination(?string $ExtensionDenomination): self
    {
        $this->ExtensionDenomination = $ExtensionDenomination;

        return $this;
    }

    public function getDenominationAbregee(): ?string
    {
        return $this->DenominationAbregee;
    }

    public function setDenominationAbregee(?string $DenominationAbregee): self
    {
        $this->DenominationAbregee = $DenominationAbregee;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->Adresse1;
    }

    public function setAdresse1(?string $Adresse1): self
    {
        $this->Adresse1 = $Adresse1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->Adresse2;
    }

    public function setAdresse2(?string $Adresse2): self
    {
        $this->Adresse2 = $Adresse2;

        return $this;
    }

    public function getAdresse3(): ?string
    {
        return $this->Adresse3;
    }

    public function setAdresse3(?string $Adresse3): self
    {
        $this->Adresse3 = $Adresse3;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(?string $CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getCedex(): ?string
    {
        return $this->Cedex;
    }

    public function setCedex(?string $Cedex): self
    {
        $this->Cedex = $Cedex;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->Pays;
    }

    public function setPays(?string $Pays): self
    {
        $this->Pays = $Pays;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(?string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->Fax;
    }

    public function setFax(?string $Fax): self
    {
        $this->Fax = $Fax;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(?string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->Web;
    }

    public function setWeb(?string $Web): self
    {
        $this->Web = $Web;

        return $this;
    }

    public function getTypeEtablissement(): ?string
    {
        return $this->TypeEtablissement;
    }

    public function setTypeEtablissement(string $TypeEtablissement): self
    {
        $this->TypeEtablissement = $TypeEtablissement;

        return $this;
    }

    public function getTypeEnseignementPrive(): ?string
    {
        return $this->TypeEnseignementPrive;
    }

    public function setTypeEnseignementPrive(string $TypeEnseignementPrive): self
    {
        $this->TypeEnseignementPrive = $TypeEnseignementPrive;

        return $this;
    }

    public function getSousContrat(): ?bool
    {
        return $this->SousContrat;
    }

    public function setSousContrat(?bool $SousContrat): self
    {
        $this->SousContrat = $SousContrat;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->Formation;
    }

    public function setFormation(?string $Formation): self
    {
        $this->Formation = $Formation;

        return $this;
    }

    public function getNombreEleves(): ?int
    {
        return $this->NombreEleves;
    }

    public function setNombreEleves(?int $NombreEleves): self
    {
        $this->NombreEleves = $NombreEleves;

        return $this;
    }

    public function getFaxing(): ?string
    {
        return $this->Faxing;
    }

    public function setFaxing(string $Faxing): self
    {
        $this->Faxing = $Faxing;

        return $this;
    }

    public function getMailing(): ?bool
    {
        return $this->Mailing;
    }

    public function setMailing(bool $Mailing): self
    {
        $this->Mailing = $Mailing;

        return $this;
    }

    public function getDateMiseAJour(): ?\DateTimeInterface
    {
        return $this->DateMiseAJour;
    }

    public function setDateMiseAJour(\DateTimeInterface $DateMiseAJour): self
    {
        $this->DateMiseAJour = $DateMiseAJour;

        return $this;
    }

    public function getDateExport(): ?\DateTimeInterface
    {
        return $this->DateExport;
    }

    public function setDateExport(?\DateTimeInterface $DateExport): self
    {
        $this->DateExport = $DateExport;

        return $this;
    }

    public function getNumeroAdministratif(): ?string
    {
        return $this->NumeroAdministratif;
    }

    public function setNumeroAdministratif(?string $NumeroAdministratif): self
    {
        $this->NumeroAdministratif = $NumeroAdministratif;

        return $this;
    }

    public function getCodeBac(): ?string
    {
        return $this->CodeBac;
    }

    public function setCodeBac(?string $CodeBac): self
    {
        $this->CodeBac = $CodeBac;

        return $this;
    }

    public function getAdressePostale1(): ?string
    {
        return $this->AdressePostale1;
    }

    public function setAdressePostale1(?string $AdressePostale1): self
    {
        $this->AdressePostale1 = $AdressePostale1;

        return $this;
    }

    public function getAdressePostale2(): ?string
    {
        return $this->AdressePostale2;
    }

    public function setAdressePostale2(?string $AdressePostale2): self
    {
        $this->AdressePostale2 = $AdressePostale2;

        return $this;
    }

    public function getAdressePostale3(): ?string
    {
        return $this->AdressePostale3;
    }

    public function setAdressePostale3(?string $AdressePostale3): self
    {
        $this->AdressePostale3 = $AdressePostale3;

        return $this;
    }

    public function getAdressePostale4(): ?string
    {
        return $this->AdressePostale4;
    }

    public function setAdressePostale4(?string $AdressePostale4): self
    {
        $this->AdressePostale4 = $AdressePostale4;

        return $this;
    }

    public function getAdressePostale5(): ?string
    {
        return $this->AdressePostale5;
    }

    public function setAdressePostale5(?string $AdressePostale5): self
    {
        $this->AdressePostale5 = $AdressePostale5;

        return $this;
    }

    public function getAdressePostale6(): ?string
    {
        return $this->AdressePostale6;
    }

    public function setAdressePostale6(?string $AdressePostale6): self
    {
        $this->AdressePostale6 = $AdressePostale6;

        return $this;
    }

    public function getAdressePostale7(): ?string
    {
        return $this->AdressePostale7;
    }

    public function setAdressePostale7(?string $AdressePostale7): self
    {
        $this->AdressePostale7 = $AdressePostale7;

        return $this;
    }

    public function getExportWeb(): ?boolean
    {
        return $this->ExportWeb;
    }

    public function setExportWeb(boolean $ExportWeb): self
    {
        $this->ExportWeb = $ExportWeb;

        return $this;
    }

    public function getPresenceWeb(): ?bool
    {
        return $this->PresenceWeb;
    }

    public function setPresenceWeb(bool $PresenceWeb): self
    {
        $this->PresenceWeb = $PresenceWeb;

        return $this;
    }

    public function getHorsSecteur(): ?bool
    {
        return $this->HorsSecteur;
    }

    public function setHorsSecteur(bool $HorsSecteur): self
    {
        $this->HorsSecteur = $HorsSecteur;

        return $this;
    }

    public function getDemandeMaquette(): ?bool
    {
        return $this->DemandeMaquette;
    }

    public function setDemandeMaquette(bool $DemandeMaquette): self
    {
        $this->DemandeMaquette = $DemandeMaquette;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->Facebook;
    }

    public function setFacebook(?string $Facebook): self
    {
        $this->Facebook = $Facebook;

        return $this;
    }

    public function getLastIDUser(): ?int
    {
        return $this->lastIDUser;
    }

    public function setLastIDUser(int $lastIDUser): self
    {
        $this->lastIDUser = $lastIDUser;

        return $this;
    }

    public function getLastProfilUser(): ?string
    {
        return $this->lastProfilUser;
    }

    public function setLastProfilUser(?string $lastProfilUser): self
    {
        $this->lastProfilUser = $lastProfilUser;

        return $this;
    }

    public function getPresencePapier(): ?bool
    {
        return $this->PresencePapier;
    }

    public function setPresencePapier(bool $PresencePapier): self
    {
        $this->PresencePapier = $PresencePapier;

        return $this;
    }

    public function getDateAcces(): ?\DateTimeInterface
    {
        return $this->DateAcces;
    }

    public function setDateAcces(\DateTimeInterface $DateAcces): self
    {
        $this->DateAcces = $DateAcces;

        return $this;
    }

    public function getDateExportWeb(): ?\DateTimeInterface
    {
        return $this->DateExportWeb;
    }

    public function setDateExportWeb(\DateTimeInterface $DateExportWeb): self
    {
        $this->DateExportWeb = $DateExportWeb;

        return $this;
    }

    public function getMailExtranet(): ?string
    {
        return $this->MailExtranet;
    }

    public function setMailExtranet(?string $MailExtranet): self
    {
        $this->MailExtranet = $MailExtranet;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->DateRetour;
    }

    public function setDateRetour(\DateTimeInterface $DateRetour): self
    {
        $this->DateRetour = $DateRetour;

        return $this;
    }

    public function getMailEdito1(): ?string
    {
        return $this->MailEdito1;
    }

    public function setMailEdito1(string $MailEdito1): self
    {
        $this->MailEdito1 = $MailEdito1;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
