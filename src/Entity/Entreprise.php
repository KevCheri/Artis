<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomMagasin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SIRET;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DenominationSocial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProduitType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pays;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $CodePostal;

    /**
     * @ORM\Column(type="object")
     */
    private $Kbis;

    /**
     * @ORM\Column(type="object")
     */
    private $Identité;

    /**
     * @ORM\Column(type="object")
     */
    private $RIB;

    /**
     * @ORM\Column(type="object")
     */
    private $logo;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getNomMagasin(): ?string
    {
        return $this->NomMagasin;
    }

    public function setNomMagasin(string $NomMagasin): self
    {
        $this->NomMagasin = $NomMagasin;

        return $this;
    }

    public function getSIRET(): ?string
    {
        return $this->SIRET;
    }

    public function setSIRET(string $SIRET): self
    {
        $this->SIRET = $SIRET;

        return $this;
    }

    public function getDenominationSocial(): ?string
    {
        return $this->DenominationSocial;
    }

    public function setDenominationSocial(string $DenominationSocial): self
    {
        $this->DenominationSocial = $DenominationSocial;

        return $this;
    }

    public function getProduitType(): ?string
    {
        return $this->ProduitType;
    }

    public function setProduitType(string $ProduitType): self
    {
        $this->ProduitType = $ProduitType;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->Pays;
    }

    public function setPays(string $Pays): self
    {
        $this->Pays = $Pays;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(string $CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getKbis()
    {
        return $this->Kbis;
    }

    public function setKbis($Kbis): self
    {
        $this->Kbis = $Kbis;

        return $this;
    }

    public function getIdentité()
    {
        return $this->Identité;
    }

    public function setIdentité($Identité): self
    {
        $this->Identité = $Identité;

        return $this;
    }

    public function getRIB()
    {
        return $this->RIB;
    }

    public function setRIB($RIB): self
    {
        $this->RIB = $RIB;

        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }
}
