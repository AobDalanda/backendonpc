<?php

namespace App\Entity;

use App\Repository\EtablissementsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="text")
     */
    private $MailEdito2;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $StatutEnvoi;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $StatutEnvoi2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $PresenceGratuite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $BloqueTxtRef;

    /**
     * @ORM\Column(type="integer")
     */
    private $DeleguesTemporaires_Identifiant;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $InternatFille;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $InternatGarcon;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $InternatPermanent;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $InternatSemaine;



    /**
     * @ORM\Column(type="decimal", precision=10, scale=7)
     */
    private $Latitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=7)
     */
    private $Longitude;

    /**
     * @ORM\Column(type="text")
     */
    private $ResultatGeolocalisation;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $GestionCoordonneesGPS;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $OptionPrint;
/*
    /**
     * @ORM\OneToMany(targetEntity=OrdresParticipationsProduits::class, mappedBy="etablissements", orphanRemoval=true)
     */
  //  private $ordreparticipationproduit;

    /**
     * @ORM\ManyToOne(targetEntity=Dioceses::class, inversedBy="etablissments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dioceses;

    /**
     * @ORM\ManyToOne(targetEntity=Rubriques::class, inversedBy="etablissements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rubriques;

    /**
     * @ORM\ManyToOne(targetEntity=SourcesMisesAJour::class, inversedBy="etablissements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sourcesMisesAJour;

    /**
     * @ORM\ManyToOne(targetEntity=CategoriesOrganismes::class, inversedBy="etablissements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categoriesOrganismes;

    /**
     * @ORM\ManyToOne(targetEntity=TypesEtablissements::class, inversedBy="etablissements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typesEtablissements;

    /**
     * @ORM\ManyToOne(targetEntity=Villes::class, inversedBy="etablissements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $villes;

    /**
     * @ORM\ManyToOne(targetEntity=Clients::class, inversedBy="etablissements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clients;

    /**
     * @ORM\OneToMany(targetEntity=OrdresParticipationsProduits::class, mappedBy="etablissements", orphanRemoval=true)
     */
    private $ordresParticipationsProduits;

    /**
     * @ORM\OneToMany(targetEntity=Sites::class, mappedBy="etablissement", orphanRemoval=true)
     */
    private $sites;

    /**
     * @ORM\ManyToMany(targetEntity=Contacts::class, mappedBy="etablissement")
     */
    private $contacts;

    /**
     * @ORM\OneToMany(targetEntity=InsertionWeb::class, mappedBy="etablissement", orphanRemoval=true)
     */
    private $insertionWebs;

    public function __construct()
    {
        $this->ordreparticipationproduit = new ArrayCollection();
        $this->ordresParticipationsProduits = new ArrayCollection();
        $this->sites = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->insertionWebs = new ArrayCollection();
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

    public function getExportWeb(): ?bool
    {
        return $this->ExportWeb;
    }

    public function setExportWeb(bool $ExportWeb): self
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

    public function getMailEdito2(): ?string
    {
        return $this->MailEdito2;
    }

    public function setMailEdito2(string $MailEdito2): self
    {
        $this->MailEdito2 = $MailEdito2;

        return $this;
    }

    public function getStatutEnvoi(): ?string
    {
        return $this->StatutEnvoi;
    }

    public function setStatutEnvoi(?string $StatutEnvoi): self
    {
        $this->StatutEnvoi = $StatutEnvoi;

        return $this;
    }

    public function getStatutEnvoi2(): ?string
    {
        return $this->StatutEnvoi2;
    }

    public function setStatutEnvoi2(?string $StatutEnvoi2): self
    {
        $this->StatutEnvoi2 = $StatutEnvoi2;

        return $this;
    }

    public function getPresenceGratuite(): ?bool
    {
        return $this->PresenceGratuite;
    }

    public function setPresenceGratuite(bool $PresenceGratuite): self
    {
        $this->PresenceGratuite = $PresenceGratuite;

        return $this;
    }

    public function getBloqueTxtRef(): ?bool
    {
        return $this->BloqueTxtRef;
    }

    public function setBloqueTxtRef(bool $BloqueTxtRef): self
    {
        $this->BloqueTxtRef = $BloqueTxtRef;

        return $this;
    }

    public function getDeleguesTemporairesIdentifiant(): ?int
    {
        return $this->DeleguesTemporaires_Identifiant;
    }

    public function setDeleguesTemporairesIdentifiant(int $DeleguesTemporaires_Identifiant): self
    {
        $this->DeleguesTemporaires_Identifiant = $DeleguesTemporaires_Identifiant;

        return $this;
    }

    public function getInternatFille(): ?bool
    {
        return $this->InternatFille;
    }

    public function setInternatFille(?bool $InternatFille): self
    {
        $this->InternatFille = $InternatFille;

        return $this;
    }

    public function getInternatGarcon(): ?bool
    {
        return $this->InternatGarcon;
    }

    public function setInternatGarcon(?bool $InternatGarcon): self
    {
        $this->InternatGarcon = $InternatGarcon;

        return $this;
    }

    public function getInternatPermanent(): ?bool
    {
        return $this->InternatPermanent;
    }

    public function setInternatPermanent(?bool $InternatPermanent): self
    {
        $this->InternatPermanent = $InternatPermanent;

        return $this;
    }

    public function getInternatSemaine(): ?bool
    {
        return $this->InternatSemaine;
    }

    public function setInternatSemaine(?bool $InternatSemaine): self
    {
        $this->InternatSemaine = $InternatSemaine;

        return $this;
    }




    public function getLatitude(): ?string
    {
        return $this->Latitude;
    }

    public function setLatitude(string $Latitude): self
    {
        $this->Latitude = $Latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->Longitude;
    }

    public function setLongitude(string $Longitude): self
    {
        $this->Longitude = $Longitude;

        return $this;
    }

    public function getResultatGeolocalisation(): ?string
    {
        return $this->ResultatGeolocalisation;
    }

    public function setResultatGeolocalisation(string $ResultatGeolocalisation): self
    {
        $this->ResultatGeolocalisation = $ResultatGeolocalisation;

        return $this;
    }

    public function getGestionCoordonneesGPS(): ?string
    {
        return $this->GestionCoordonneesGPS;
    }

    public function setGestionCoordonneesGPS(string $GestionCoordonneesGPS): self
    {
        $this->GestionCoordonneesGPS = $GestionCoordonneesGPS;

        return $this;
    }

    public function getOptionPrint(): ?string
    {
        return $this->OptionPrint;
    }

    public function setOptionPrint(string $OptionPrint): self
    {
        $this->OptionPrint = $OptionPrint;

        return $this;
    }

    /**
     * @return Collection|OrdresParticipationsProduits[]
     */
    public function getOrdreparticipationproduit(): Collection
    {
        return $this->ordreparticipationproduit;
    }

    public function addOrdreparticipationproduit(OrdresParticipationsProduits $ordreparticipationproduit): self
    {
        if (!$this->ordreparticipationproduit->contains($ordreparticipationproduit)) {
            $this->ordreparticipationproduit[] = $ordreparticipationproduit;
            $ordreparticipationproduit->setEtablissements($this);
        }

        return $this;
    }

    public function removeOrdreparticipationproduit(OrdresParticipationsProduits $ordreparticipationproduit): self
    {
        if ($this->ordreparticipationproduit->removeElement($ordreparticipationproduit)) {
            // set the owning side to null (unless already changed)
            if ($ordreparticipationproduit->getEtablissements() === $this) {
                $ordreparticipationproduit->setEtablissements(null);
            }
        }

        return $this;
    }

    public function getDioceses(): ?Dioceses
    {
        return $this->dioceses;
    }

    public function setDioceses(?Dioceses $dioceses): self
    {
        $this->dioceses = $dioceses;

        return $this;
    }

    public function getRubriques(): ?Rubriques
    {
        return $this->rubriques;
    }

    public function setRubriques(?Rubriques $rubriques): self
    {
        $this->rubriques = $rubriques;

        return $this;
    }

    public function getSourcesMisesAJour(): ?SourcesMisesAJour
    {
        return $this->sourcesMisesAJour;
    }

    public function setSourcesMisesAJour(?SourcesMisesAJour $sourcesMisesAJour): self
    {
        $this->sourcesMisesAJour = $sourcesMisesAJour;

        return $this;
    }

    public function getCategoriesOrganismes(): ?CategoriesOrganismes
    {
        return $this->categoriesOrganismes;
    }

    public function setCategoriesOrganismes(?CategoriesOrganismes $categoriesOrganismes): self
    {
        $this->categoriesOrganismes = $categoriesOrganismes;

        return $this;
    }

    public function getTypesEtablissements(): ?TypesEtablissements
    {
        return $this->typesEtablissements;
    }

    public function setTypesEtablissements(?TypesEtablissements $typesEtablissements): self
    {
        $this->typesEtablissements = $typesEtablissements;

        return $this;
    }

    public function getVilles(): ?Villes
    {
        return $this->villes;
    }

    public function setVilles(?Villes $villes): self
    {
        $this->villes = $villes;

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
            $ordresParticipationsProduit->setEtablissements($this);
        }

        return $this;
    }

    public function removeOrdresParticipationsProduit(OrdresParticipationsProduits $ordresParticipationsProduit): self
    {
        if ($this->ordresParticipationsProduits->removeElement($ordresParticipationsProduit)) {
            // set the owning side to null (unless already changed)
            if ($ordresParticipationsProduit->getEtablissements() === $this) {
                $ordresParticipationsProduit->setEtablissements(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Sites[]
     */
    public function getSites(): Collection
    {
        return $this->sites;
    }

    public function addSite(Sites $site): self
    {
        if (!$this->sites->contains($site)) {
            $this->sites[] = $site;
            $site->setEtablissement($this);
        }

        return $this;
    }

    public function removeSite(Sites $site): self
    {
        if ($this->sites->removeElement($site)) {
            // set the owning side to null (unless already changed)
            if ($site->getEtablissement() === $this) {
                $site->setEtablissement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contacts[]
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contacts $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->addEtablissement($this);
        }

        return $this;
    }

    public function removeContact(Contacts $contact): self
    {
        if ($this->contacts->removeElement($contact)) {
            $contact->removeEtablissement($this);
        }

        return $this;
    }

    /**
     * @return Collection|INsertionWeb[]
     */
    public function getInsertionWebs(): Collection
    {
        return $this->insertionWebs;
    }

    public function addInsertionWeb(INsertionWeb $insertionWeb): self
    {
        if (!$this->insertionWebs->contains($insertionWeb)) {
            $this->insertionWebs[] = $insertionWeb;
            $insertionWeb->setEtablissement($this);
        }

        return $this;
    }

    public function removeInsertionWeb(INsertionWeb $insertionWeb): self
    {
        if ($this->insertionWebs->removeElement($insertionWeb)) {
            // set the owning side to null (unless already changed)
            if ($insertionWeb->getEtablissement() === $this) {
                $insertionWeb->setEtablissement(null);
            }
        }

        return $this;
    }


}
