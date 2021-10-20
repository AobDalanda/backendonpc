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
}
