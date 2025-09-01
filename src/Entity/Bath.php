<?php

namespace App\Entity;

use App\Repository\BathRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BathRepository::class)]
class Bath
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pieceIdentite = null;

    #[ORM\Column(length: 255)]
    private ?string $livretFamille = null;

    #[ORM\Column(length: 255)]
    private ?string $avisImpots = null;

    #[ORM\Column(length: 255)]
    private ?string $taxeFonciere = null;

    #[ORM\Column(length: 255)]
    private ?string $preconisationTravaux = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dpe = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $codePostal = null;

    #[ORM\Column(length: 255)]
    private ?string $departement = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column]
    private ?int $revenu = null;

    #[ORM\Column]
    private ?int $metreCarre = null;

    #[ORM\Column(length: 255)]
    private ?string $menage = null;

    #[ORM\Column(length: 255)]
    private ?string $isolation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPieceIdentite(): ?string
    {
        return $this->pieceIdentite;
    }

    public function setPieceIdentite(string $pieceIdentite): static
    {
        $this->pieceIdentite = $pieceIdentite;

        return $this;
    }

    public function getLivretFamille(): ?string
    {
        return $this->livretFamille;
    }

    public function setLivretFamille(string $livretFamille): static
    {
        $this->livretFamille = $livretFamille;

        return $this;
    }

    public function getAvisImpots(): ?string
    {
        return $this->avisImpots;
    }

    public function setAvisImpots(string $avisImpots): static
    {
        $this->avisImpots = $avisImpots;

        return $this;
    }

    public function getTaxeFonciere(): ?string
    {
        return $this->taxeFonciere;
    }

    public function setTaxeFonciere(string $taxeFonciere): static
    {
        $this->taxeFonciere = $taxeFonciere;

        return $this;
    }

    public function getPreconisationTravaux(): ?string
    {
        return $this->preconisationTravaux;
    }

    public function setPreconisationTravaux(string $preconisationTravaux): static
    {
        $this->preconisationTravaux = $preconisationTravaux;

        return $this;
    }

    public function getDpe(): ?string
    {
        return $this->dpe;
    }

    public function setDpe(?string $dpe): static
    {
        $this->dpe = $dpe;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): static
    {
        $this->departement = $departement;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getRevenu(): ?int
    {
        return $this->revenu;
    }

    public function setRevenu(int $revenu): static
    {
        $this->revenu = $revenu;

        return $this;
    }

    public function getMetreCarre(): ?int
    {
        return $this->metreCarre;
    }

    public function setMetreCarre(int $metreCarre): static
    {
        $this->metreCarre = $metreCarre;

        return $this;
    }

    public function getMenage(): ?string
    {
        return $this->menage;
    }

    public function setMenage(string $menage): static
    {
        $this->menage = $menage;

        return $this;
    }

    public function getIsolation(): ?string
    {
        return $this->isolation;
    }

    public function setIsolation(string $isolation): static
    {
        $this->isolation = $isolation;

        return $this;
    }
}
