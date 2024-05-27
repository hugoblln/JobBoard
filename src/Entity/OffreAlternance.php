<?php

namespace App\Entity;

use App\Repository\OffreAlternanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OffreAlternanceRepository::class)]
class OffreAlternance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    private ?string $Entreprise = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    private ?string $Localisation = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank()]
    private ?string $descriptionEntreprise = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    private ?string $Poste = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank()]
    private ?string $descriptionPoste = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 0)]
    #[Assert\NotBlank()]
    private ?string $Salaire = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    private ?string $Languages = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()]
    private ?string $Requis = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank()]
    private ?string $lienAnnonce = null;

    #[ORM\Column]
    #[Assert\NotBlank()]
    private ?bool $enLigne = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    private ?bool $Retour = null;

    public function __construct()
    {
        $this->enLigne = true;
        $this->Retour = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntreprise(): ?string
    {
        return $this->Entreprise;
    }

    public function setEntreprise(string $Entreprise): static
    {
        $this->Entreprise = $Entreprise;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->Localisation;
    }

    public function setLocalisation(string $Localisation): static
    {
        $this->Localisation = $Localisation;

        return $this;
    }

    public function getDescriptionEntreprise(): ?string
    {
        return $this->descriptionEntreprise;
    }

    public function setDescriptionEntreprise(string $descriptionEntreprise): static
    {
        $this->descriptionEntreprise = $descriptionEntreprise;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->Poste;
    }

    public function setPoste(string $Poste): static
    {
        $this->Poste = $Poste;

        return $this;
    }

    public function getDescriptionPoste(): ?string
    {
        return $this->descriptionPoste;
    }

    public function setDescriptionPoste(string $descriptionPoste): static
    {
        $this->descriptionPoste = $descriptionPoste;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->Salaire;
    }

    public function setSalaire(string $Salaire): static
    {
        $this->Salaire = $Salaire;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->Languages;
    }

    public function setLanguages(string $Languages): static
    {
        $this->Languages = $Languages;

        return $this;
    }

    public function getRequis(): ?string
    {
        return $this->Requis;
    }

    public function setRequis(string $Requis): static
    {
        $this->Requis = $Requis;

        return $this;
    }

    public function getLienAnnonce(): ?string
    {
        return $this->lienAnnonce;
    }

    public function setLienAnnonce(string $lienAnnonce): static
    {
        $this->lienAnnonce = $lienAnnonce;

        return $this;
    }

    public function isEnLigne(): ?bool
    {
        return $this->enLigne;
    }

    public function setEnLigne(bool $enLigne): static
    {
        $this->enLigne = $enLigne;

        return $this;
    }

    public function isRetour(): ?bool
    {
        return $this->Retour;
    }

    public function setRetour(bool $Retour): static
    {
        $this->Retour = $Retour;

        return $this;
    }
}
