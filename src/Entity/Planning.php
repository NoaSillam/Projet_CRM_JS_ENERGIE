<?php

namespace App\Entity;

use App\Entity\Lead;
use App\Repository\PlanningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanningRepository::class)]
class Planning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentaire = null;

    #[ORM\ManyToOne(targetEntity: Lead::class, inversedBy: 'plannings')]
    private ?Lead $id_lead = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $ageMaison = null;

    #[ORM\Column(length: 255)]
    private ?string $consommationAnnuelOuMensuelle = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeChauffage = null;

    #[ORM\Column]
    private ?int $superficieMaison = null;

    #[ORM\Column(length: 255)]
    private ?string $situationFamiliale = null;

    #[ORM\Column(length: 255)]
    private ?string $creditEnCours = null;

    #[ORM\Column]
    private ?int $RevenuFiscalReference = null;

    #[ORM\Column(length: 255)]
    private ?string $salaireMensuel = null;

    #[ORM\Column(length: 255)]
    private ?string $matiereMursExt = null;

    #[ORM\Column(length: 255)]
    private ?string $ageMRMME = null;

    #[ORM\Column]
    private ?int $ageChaudiere = null;

    #[ORM\Column(length: 255)]
    private ?string $situationPro = null;

    #[ORM\Column]
    private ?float $nbrePersonneCharge = null;

    #[ORM\Column]
    private ?float $superficieMursExt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statusRDV = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getIdLead(): ?Lead
    {
        return $this->id_lead;
    }

    public function setIdLead(?Lead $id_lead): static
    {
        $this->id_lead = $id_lead;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getAgeMaison(): ?int
    {
        return $this->ageMaison;
    }

    public function setAgeMaison(int $ageMaison): static
    {
        $this->ageMaison = $ageMaison;

        return $this;
    }

    public function getConsommationAnnuelOuMensuelle(): ?string
    {
        return $this->consommationAnnuelOuMensuelle;
    }

    public function setConsommationAnnuelOuMensuelle(string $consommationAnnuelOuMensuelle): static
    {
        $this->consommationAnnuelOuMensuelle = $consommationAnnuelOuMensuelle;

        return $this;
    }

    public function getTypeChauffage(): ?string
    {
        return $this->TypeChauffage;
    }

    public function setTypeChauffage(string $TypeChauffage): static
    {
        $this->TypeChauffage = $TypeChauffage;

        return $this;
    }

    public function getSuperficieMaison(): ?int
    {
        return $this->superficieMaison;
    }

    public function setSuperficieMaison(int $superficieMaison): static
    {
        $this->superficieMaison = $superficieMaison;

        return $this;
    }

    public function getSituationFamiliale(): ?string
    {
        return $this->situationFamiliale;
    }

    public function setSituationFamiliale(string $situationFamiliale): static
    {
        $this->situationFamiliale = $situationFamiliale;

        return $this;
    }

    public function getCreditEnCours(): ?string
    {
        return $this->creditEnCours;
    }

    public function setCreditEnCours(string $creditEnCours): static
    {
        $this->creditEnCours = $creditEnCours;

        return $this;
    }

    public function getRevenuFiscalReference(): ?int
    {
        return $this->RevenuFiscalReference;
    }

    public function setRevenuFiscalReference(int $RevenuFiscalReference): static
    {
        $this->RevenuFiscalReference = $RevenuFiscalReference;

        return $this;
    }

    public function getSalaireMensuel(): ?string
    {
        return $this->salaireMensuel;
    }

    public function setSalaireMensuel(string $salaireMensuel): static
    {
        $this->salaireMensuel = $salaireMensuel;

        return $this;
    }

    public function getMatiereMursExt(): ?string
    {
        return $this->matiereMursExt;
    }

    public function setMatiereMursExt(string $matiereMursExt): static
    {
        $this->matiereMursExt = $matiereMursExt;

        return $this;
    }

    public function getAgeMRMME(): ?string
    {
        return $this->ageMRMME;
    }

    public function setAgeMRMME(string $ageMRMME): static
    {
        $this->ageMRMME = $ageMRMME;

        return $this;
    }

    public function getAgeChaudiere(): ?int
    {
        return $this->ageChaudiere;
    }

    public function setAgeChaudiere(int $ageChaudiere): static
    {
        $this->ageChaudiere = $ageChaudiere;

        return $this;
    }

    public function getSituationPro(): ?string
    {
        return $this->situationPro;
    }

    public function setSituationPro(string $situationPro): static
    {
        $this->situationPro = $situationPro;

        return $this;
    }

    public function getNbrePersonneCharge(): ?float
    {
        return $this->nbrePersonneCharge;
    }

    public function setNbrePersonneCharge(float $nbrePersonneCharge): static
    {
        $this->nbrePersonneCharge = $nbrePersonneCharge;

        return $this;
    }

    public function getSuperficieMursExt(): ?float
    {
        return $this->superficieMursExt;
    }

    public function setSuperficieMursExt(float $superficieMursExt): static
    {
        $this->superficieMursExt = $superficieMursExt;

        return $this;
    }

    public function getStatusRDV(): ?string
    {
        return $this->statusRDV;
    }

    public function setStatusRDV(?string $statusRDV): static
    {
        $this->statusRDV = $statusRDV;

        return $this;
    }
}
