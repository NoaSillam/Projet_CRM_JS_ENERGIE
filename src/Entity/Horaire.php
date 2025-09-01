<?php

namespace App\Entity;

use App\Repository\HoraireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoraireRepository::class)]
class Horaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $jj = null;

    #[ORM\Column(nullable: true)]
    private ?int $mm = null;

    #[ORM\Column(nullable: true)]
    private ?int $aa = null;

    #[ORM\Column(nullable: true)]
    private ?int $cmb = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJj(): ?int
    {
        return $this->jj;
    }

    public function setJj(?int $jj): static
    {
        $this->jj = $jj;

        return $this;
    }

    public function getMm(): ?int
    {
        return $this->mm;
    }

    public function setMm(?int $mm): static
    {
        $this->mm = $mm;

        return $this;
    }

    public function getAa(): ?int
    {
        return $this->aa;
    }

    public function setAa(?int $aa): static
    {
        $this->aa = $aa;

        return $this;
    }

    public function getCmb(): ?int
    {
        return $this->cmb;
    }

    public function setCmb(?int $cmb): static
    {
        $this->cmb = $cmb;

        return $this;
    }
}
